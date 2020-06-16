<?php

namespace App\Http\Controllers;

use App\Order;
use App\Orderdetail;
use App\Unit_price;
use Illuminate\Http\Request;

class OrderdetailController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function show(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function edit(Orderdetail $orderdetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $order_id)
    {
//        dd($request->all());
        $count_one=$request['count_one'];
        $order_detail_id=$request['order_detail_id'];
        $unit_prices=Unit_price::where('status',1)->get();
        foreach ($unit_prices as $unit_price){
            $main_unit_price=$unit_price->price;
        }

        $i=0;
        while (count($count_one)>$i){
            Orderdetail::where('id',$order_detail_id[$i])->update(['count_one'=>$count_one[$i]]);
            $i++;
        }
        $order_details=Orderdetail::where('order_id',$order_id)->get();
        return view('checkout',compact('main_unit_price','order_id','order_details'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orderdetail  $orderdetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orderdetail $orderdetail)
    {

        $orders=Order::where('id',$orderdetail->order_id)->get();
        foreach ($orders as $order) {
            $order_id = $order->id;
        }
        $orderdetails=Orderdetail::where('order_id',$order_id)->get();
        $orderdetail_count=$orderdetails->count();
        if($orderdetail_count==1){
            Order::where('id',$order_id)->delete();
        }
        $orderdetail->delete();
        return redirect()->back();
    }

    public function pay($order_id)
    {
        $order_details=Orderdetail::where('order_id',$order_id)->get();
        $sum=0;
        foreach ($order_details as $order_detail){
            $sum_price=$order_detail->count_one*$order_detail->unit_price;
            $sum+=$sum_price;
        }
        return view('request',compact('sum','order_id'));
    }
}
