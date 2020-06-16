<?php

namespace App\Http\Controllers;

use App\Order;
use App\Order_score;
use App\Orderdetail;
use App\Pro_size;
use App\Product;
use App\Unit_price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Auth;
use Mail;
use function Couchbase\defaultDecoder;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request , Product $product)
    {
            $product_count_user=$request['count_one'];
            $p_count=$product->product_count;

            if($product_count_user>$p_count){
                return redirect()->back()->with([
                    'product_count' => 'namojood'
                ]);
            }
            else{
                $user_id=auth()->user()->id;
                $pro_count=$request['count_one'];
                $pro_size=$request['size_id'];
                $pro_color=$request['color_id'];
                $off_all_count=DB::table('off_alls')->where('status',1)->get()->count();
                if($off_all_count>0){
                    $off_all=DB::table('off_alls')->where('status',1)->get()->first();
                    $pro_price=($product->user_price)-($product->user_price*($off_all->off/100));
                }
                elseif($product->off>0){
                    $pro_price=($product->user_price)-($product->user_price*($product->off/100));
                }
                else{
                    $pro_price=$product->user_price;
                }

                $arz_price=Unit_price::where('status',1)->get()->first();
                
                $order_count=Order::where([['user_id',$user_id],['status',0],['success',0]])->get()->count();
                
                if($order_count>0){
                    $order=Order::where([['user_id',$user_id],['status',0],['success',0]])->get()->first();
                    $orderdetail_count_size=Orderdetail::where([['order_id',$order->id],['product_id',$product->id],['size_id',$pro_size]])->get()->count();
                    if($orderdetail_count_size>0){
                        return redirect()->back()->with([
                            'product_exist' => 'success'
                        ]);
                    }
                    else {
                            Orderdetail::create([
                                'order_id' => $order->id,
                                'product_id' => $product->id,
                                'size_id' => $pro_size,
                                'color_id' =>$pro_color,
                                'count_one' => $pro_count,
                                'unit_price' => $pro_price,
                            ]);
                            return redirect()->back()->with([
                                'add_product' => 'success'
                            ]);
                    }
                }
                else{
                    $order=Order::create([
                        'user_id' => auth()->user()->id,
                        'refnum' => "0123",
                        'au_num' => "0123",
                        'ref_id' => "0123",
                        'arz_price'=>$arz_price->price,
                    ]);
                    Orderdetail::create([
                        'order_id' => $order->id,
                        'product_id' => $product->id,
                        'size_id' => $pro_size,
                        'color_id' =>$pro_color,
                        'count_one' => $pro_count,
                        'unit_price' => $pro_price,
                    ]);
                    return redirect()->back()->with([
                        'add_product' => 'success'
                    ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }

    public function cart($order_id)
    {

        $user_id=auth()->user()->id;
        $order = Order::where([['user_id', $user_id], ['status', 0], ['success', 0]])->get()->first();
        $order_details=Orderdetail::where('order_id',$order_id)->get();
        $unit_prices=Unit_price::where('status',1)->get();
        foreach ($unit_prices as $unit_price){
            $main_unit_price=$unit_price->price;
        }
        return view('cart',compact('main_unit_price','order_id','order_details','order'));
    }
    //route /cart
    public function newcart()
    {
        $user_id=auth()->user()->id;
        $order = Order::where([['user_id', $user_id], ['status', 0], ['success', 0]])->get()->first();
        $orderdetails=Orderdetail::where('order_id',$order->id)->get();
//        dd($orderdetails);
        $main_unit_price=$order->arz_price;
        $off_all_count=DB::table('off_alls')->where('status',1)->get()->count();
        $off_all='';
        if($off_all_count>0){
            $off_all=DB::table('off_alls')->where('status',1)->get()->first();
        }
        return view('cart',compact('off_all','off_all_count','main_unit_price','orderdetails','order'));
    }

    public function addnewcart(Request $request)
    {
        if(Auth::check()) {
            $count_one=$request['count_one'];
            $product_id=$request['product_id'];
            $size_id=$request['size_id'];
            $color_id=$request['color_id'];
            $user_id=auth()->user()->id;
            $order_count=Order::where([['user_id',$user_id],['status',0]])->get()->count();
            if($order_count>0){
                $order=Order::where([['user_id',$user_id],['status',0]])->first();
                $order_detail_count=Orderdetail::where([['order_id',$order->id],['product_id',$product_id],['size_id',$size_id],['color_id',$color_id]])->get()->count();
                if($order_detail_count>0){
                    return redirect()->back()->with([
                        'product_exist' => 'success'
                    ]);
                }
                else{
                    //Order Detail Create
                    Orderdetail::create([
                        'order_id' => $order->id,
                        'product_id' => $product_id,
                        'size_id' => $size_id,
                        'color_id' =>$color_id,
                        'count_one' => $count_one,
                    ]);
                    return redirect()->back()->with([
                        'add_product' => 'success'
                    ]);
                }
            }
            else{
                //Order Create
                $order=Order::create([
                    'user_id' => auth()->user()->id,
                    'refnum' => "0123",
                    'au_num' => "0123",
                    'ref_id' => "0123",
                ]);
                //Order Detail Create
                Orderdetail::create([
                    'order_id' => $order->id,
                    'product_id' => $product_id,
                    'size_id' => $size_id,
                    'color_id' =>$color_id,
                    'count_one' => $count_one,
                ]);
                return redirect()->back()->with([
                    'add_product' => 'success'
                ]);
            }
        }
        else{
            return redirect()->back()->with([
                'user_login' => 'fail'
            ]);
        }
    }

    public function removeitem(Request $request,$id)
    {
        $order_detail=Orderdetail::where('id',$id)->get()->first();
        $order_id=$order_detail->order_id;
        $order_detail_count=Orderdetail::where('order_id',$order_id)->get()->count();

        if($order_detail_count>1){
            Orderdetail::where('id',$id)->delete();
            return redirect('/cart');
        }
        elseif($order_detail_count==1){
            Orderdetail::where('id',$id)->delete();
            Order::where('id',$order_detail->order_id)->delete();
            return redirect()->back()->with(array(
                'cart_empty' => 'success',
            ));
        }
    }

    public function pay_ok($order_id)
    {
        $refnum=date("H").date("i").date("s").Str::random(6).date("Y").date("m").date("d");
        Order::where('id',$order_id)->update(['refnum'=>$refnum]);
        Order::where('id',$order_id)->update(['status'=>1]);
        return view('order-refnum',compact('refnum','order_id'));
    }
    
    
}
