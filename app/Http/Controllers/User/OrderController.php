<?php

namespace App\Http\Controllers\User;

use App\Order;
use App\Product;
use App\Order_score;
use App\Orderdetail;
use App\User;
use Illuminate\Support\Facades\Input;
//use Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Unit_price;
use SoapClient;
use Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::where('user_id',auth()->user()->id)->orderBy('created_at','desc')->get();
//        $order_details=Orderdetail::all();
        $unit_prices=Unit_price::where('status',1)->first();
        return view('user.order.index',compact('orders','unit_prices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        if($order->user_id==auth()->user()->id && Orderdetail::where('order_id', $order->id)->get()->count()>0) {
            $order_details = Orderdetail::where('order_id', $order->id)->orderBy('created_at','desc')->get();
            $sizes = DB::table('product_size')->get();
            $unit_prices = Unit_price::where('status', 1)->first();
            return view('user.order_detail.index', compact('order_details', 'order', 'sizes', 'unit_prices'));
        }
        else{
            return redirect('user/order');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    protected $MerchantID = 'c2c630d2-08df-11e9-b497-005056a205be';

    public function payZarin(Request $request)
    {
        $order_id = $request->input('order_id');
        $baskets = Order::where([['user_id', auth()->user()->id],['id',$order_id]])->get();
        $order_details=Orderdetail::where('order_id',$order_id)->get();
        $unit_prices=Unit_price::where('status',1)->first();

        $send_price=DB::table('send_price')->get()->first();
        $peyk=$send_price->price;
        
        $price=0;
        foreach ($order_details as $order_detail){
            $price+=$order_detail->unit_price*$order_detail->count_one*$unit_prices->price;
        }
        $user_score=auth()->user()->order_score;
        $off_price=0;
        $user_order_score_count=Order_score::where([['score_start','<=',$user_score],['score_end','>',$user_score],['status',1]])->get()->count();
        if($user_order_score_count>0){
            $user_order_score=Order_score::where([['score_start','<=',$user_score],['score_end','>',$user_score],['status',1]])->get()->first();
            $off_price=$user_order_score->off_price;
        }

//        $order_for_temp=Order::where('id',$order_id)->get()->first();
//        DB::table('orders_temp')->insert([
//            [
//                'now_order_id' => $order_id ,
//                'user_id' => $order_for_temp->user_id,
//                'unreguser_id' => $order_for_temp->unreguser_id,
//                'refnum' => $order_for_temp->refnum,
//                'au_num' => $order_for_temp->au_num,
//                'ref_id' => $order_for_temp->ref_id,
//                'statusid' => $order_for_temp->statusid,
//                'status' => $order_for_temp->status,
//                'arz_price' => $order_for_temp->arz_price,
//                'discount' => $order_for_temp->discount,
//                'peyk' => $order_for_temp->peyk,
//                'success' => $order_for_temp->success,
//                'zarinAuthority' => $order_for_temp->zarinAuthority,
//                'zarinStatus' => $order_for_temp->zarinStatus,
//                'created_at' => $order_for_temp->created_at,
//                'updated_at' => $order_for_temp->updated_at,
//            ]
//        ]);

//        $orderdetail_for_temps=Orderdetail::where('order_id',$order_id)->get();
//        foreach ($orderdetail_for_temps as $orderdetail_for_temp) {
//            DB::table('orderdetails_temp')->insert([
//                [
//                    'old_orderdetail_id' => $orderdetail_for_temp->id ,
//                    'order_id' => $orderdetail_for_temp->order_id,
//                    'product_id' => $orderdetail_for_temp->product_id,
//                    'size_id' => $orderdetail_for_temp->size_id,
//                    'color_id' => $orderdetail_for_temp->color_id,
//                    'count_one' => $orderdetail_for_temp->count_one,
//                    'count_pack' => $orderdetail_for_temp->count_pack,
//                    'count_box' => $orderdetail_for_temp->count_box,
//                    'unit_price' => $orderdetail_for_temp->unit_price,
//                    'status' => $orderdetail_for_temp->status,
//                    'created_at' => $orderdetail_for_temp->created_at,
//                    'updated_at' => $orderdetail_for_temp->updated_at,
//                ]
//            ]);
//        }
        
        $price=($price+$peyk)-$off_price;
        $Description = 'خرید محصول | فروشگاه مریمی گلد';
        $Email = auth()->user()->email;
        $CallbackURL = 'http://maryamigold.com/user/zarinpal/checker';
//        $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
        $result = $client->PaymentRequest(
            [
                'MerchantID' => $this->MerchantID,
                'Amount' => $price,
                'Description' => $Description,
                'Email' => $Email,
                'CallbackURL' => $CallbackURL,
            ]
        );
        $zarinAuthority = $result->Authority;
        $zarinStatus = $result->Status;

        foreach ($baskets as $basket) {
//            $basket->update(['zarinAuthority' => $zarinAuthority, 'zarinStatus' => $zarinStatus]);
            $basket->update(['zarinAuthority' => $zarinAuthority]);
        }

//        DB::table('orders_temp')->where('now_order_id',$order_id)->update(['zarinAuthority' => $zarinAuthority]);

        if ($result->Status == 100) {
//            return redirect('https://sandbox.zarinpal.com/pg/StartPay/' . $result->Authority);
            return redirect('https://www.zarinpal.com/pg/StartPay/' . $result->Authority);
        } else{
            return redirect('/')->with([
                'zarinStatus' => $result->Status,
                'zarinFailed' => 'failed',
            ]);
        }
    }

    public function payZarinChecker()
    {
        $Authority = request('Authority');
        $baskets_count = Order::
            where('status', '0')
            ->where('zarinAuthority', $Authority)
            ->get()->count();

        $baskets = Order::
        where('status', '0')
            ->where('zarinAuthority', $Authority)
            ->get();

//        if($baskets_count==1){
//            $baskets = Order::
//            where('status', '0')
//                ->where('zarinAuthority', $Authority)
//                ->get();
//        }

//        else{
//            $order_temps_new=DB::table('orders_temp')->where('zarinAuthority',$Authority)->get()->first();
//            $order_new_temp=Order::create([
//                'user_id' => $order_temps_new->user_id,
//                'unreguser_id' => $order_temps_new->unreguser_id,
//                'refnum' => $order_temps_new->refnum,
//                'au_num' => $order_temps_new->au_num,
//                'ref_id' => $order_temps_new->ref_id,
//                'statusid' => $order_temps_new->statusid,
//                'status' => $order_temps_new->status,
//                'arz_price' => $order_temps_new->arz_price,
//                'discount' => $order_temps_new->discount,
//                'peyk' => $order_temps_new->peyk,
//                'success' => $order_temps_new->success,
//                'zarinAuthority' => $order_temps_new->zarinAuthority,
//                'zarinStatus' => $order_temps_new->zarinStatus,
//                'created_at' => $order_temps_new->created_at,
//                'updated_at' => $order_temps_new->updated_at,
//            ]);
//
//            $orderdetail_temps_new=DB::table('orderdetails_temp')->where('order_id',$order_temps_new->now_order_id)->get();
//            foreach ($orderdetail_temps_new as $orderdetail_temp_new) {
//                $orderdetail_new_temp=Orderdetail::create([
//                    'order_id' => $orderdetail_temp_new->order_id,
//                    'product_id' => $orderdetail_temp_new->product_id,
//                    'size_id' => $orderdetail_temp_new->size_id,
//                    'color_id' => $orderdetail_temp_new->color_id,
//                    'count_one' => $orderdetail_temp_new->count_one,
//                    'count_pack' => $orderdetail_temp_new->count_pack,
//                    'count_box' => $orderdetail_temp_new->count_box,
//                    'unit_price' => $orderdetail_temp_new->unit_price,
//                    'status' => $orderdetail_temp_new->status,
//                    'created_at' => $orderdetail_temp_new->created_at,
//                    'updated_at' => $orderdetail_temp_new->updated_at,
//                ]);
//            }
//            Order::where('id',$order_new_temp->id)->update(['id'=>$order_temps_new->now_order_id]);
//            $baskets = Order::
//            where('status', '0')
//                ->where('zarinAuthority', $Authority)
//                ->get();
//        }

        $my_basket = Order::
        where('status', '0')
            ->where('zarinAuthority', $Authority)
            ->get()->first();
        $my_user_id=$my_basket->user_id;

        $discountCost = $my_basket->discount;
        $finalCost = 0;

        $send_price=DB::table('send_price')->get()->first();
        $peyk=$send_price->price;

        $or_details=Orderdetail::where('order_id',$my_basket->id)->get();
        $main_unit_price=Unit_price::where('status',1)->get()->first();

        foreach ($or_details as $or_detail) {
            $finalCost += ($or_detail->unit_price*$or_detail->count_one*$main_unit_price->price);
        }
        $Amount = ($finalCost+$peyk)-$discountCost;

        if ($_GET['Status'] == 'OK') {
//            $client = new SoapClient('https://sandbox.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
            $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
            $result = $client->PaymentVerification(
                [
                    'MerchantID' => $this->MerchantID,
                    'Authority' => $Authority,
                    'Amount' => $Amount,
                ]
            );

            if ($result->Status == 100) {
                $new_user_score=0;
                foreach ($baskets as $basket) {
                    $order_details=Orderdetail::where('order_id',$basket->id)->get();
                    foreach ($order_details as $order_detail){
                        $my_product=Product::where('id',$order_detail->product_id)->get()->first();

                        if($my_product->id==63 && $order_detail->product_size==3){
                            $p_for_count=Product::where('id',81)->first();
                        }
                        else{
                            $p_for_count=$my_product;
                        }

                        $old_product_count=$p_for_count->product_count;
                        $now_product_count=$order_detail->count_one;
                        $new_product_count=$old_product_count-$now_product_count;
                        Product::where('id',$p_for_count->id)->update(['product_count'=>$new_product_count]);

                        if($new_product_count==0 || $new_product_count<0){
                            Product::where('id',$p_for_count->id)->update(['mojood'=>0]);
                            Product::where('id',$p_for_count->id)->update(['product_count'=>0]);
                        }
                        $new_user_score+=$order_detail->count_one*$my_product->order_score;
                    }
                    $basket->update(['success' => '1', 'status' => '1', 'progress' => '0', 'zarinRefID' => $result->RefID, 'zarinStatus' => $result->Status]);
                }

                $last_user=User::where('id',$my_user_id)->get()->first();
                $last_user_score=$last_user->order_score;

                $now_user_score=$new_user_score;
                $user_order_score_count=Order_score::where([['score_start','<=',$last_user_score],['score_end','>',$last_user_score],['status',1]])->get()->count();
                if($user_order_score_count>0){
                    $user_order_score=Order_score::where([['score_start','<=',$last_user_score],['score_end','>',$last_user_score],['status',1]])->get()->first();
                    $now_user_score=$last_user_score-$user_order_score->score_start;
                }
                $new_user_score=$new_user_score+$now_user_score;
                User::where('id',$my_user_id)->update(['order_score'=>$new_user_score]);

//                session()->forget('product');
//                session()->forget('color');
//                session()->forget('size');
//                session()->forget('count');
//                session()->forget('order_id');

                $order_details_mail=Orderdetail::where('order_id',$my_basket->id)->get();
                $my_order_mail=Order::where('id',$my_basket->id)->get()->first();
                $total_mail_price=$Amount;
                $data_email = array('name'=>"Maryami Gold" , 'site_name'=>"مریمی گلد" , 'order'=>$my_order_mail , 'order_details'=>$order_details_mail , 'total_price'=>$total_mail_price);
                $email_send=Mail::send('order_paid_mail',$data_email, function($message) {
                    $message->to('mr.narenjilar@gmail.com', '')->subject
                    ('Order Paid');
                    $message->from('info@maryamigold.com','maryamigold');
                });

                return redirect('/')->with([
                    'transaction' => 'success',
                    'RefID' => $result->RefID,
                    'UserScore' => $new_user_score,
                ]);
            } else {
                foreach ($baskets as $basket) {
                    $basket->update(['success' => '0', 'zarinStatus' => $result->Status]);
                }

//                session()->forget('product');
//                session()->forget('color');
//                session()->forget('size');
//                session()->forget('count');
//                session()->forget('order_id');

                return redirect('/')->with([
                    'zarinStatus' => $result->Status,
                    'zarinFailed' => 'failed',
                ]);
            }

        } else {
            foreach ($baskets as $basket) {
                $basket->update(['success' => '0' , 'zarinStatus' => null , 'zarinAuthority'=>null]);
            }

//            session()->forget('product');
//            session()->forget('color');
//            session()->forget('size');
//            session()->forget('count');
//            session()->forget('order_id');

            return redirect('/user/order')->with([
                'transaction' => 'failOrCancel',
            ]);
        }
    }
}
