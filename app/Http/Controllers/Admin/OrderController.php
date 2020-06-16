<?php

namespace App\Http\Controllers\Admin;

use App\Order;
use App\Orderdetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Unit_price;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=Order::orderBy('created_at','desc')->get();
        $order_details=Orderdetail::all();
        $unit_prices=Unit_price::where('status',1)->first();
        return view('admin.order.index',compact('orders','order_details','unit_prices'));
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
        $order_details=Orderdetail::where('order_id',$order->id)->get();
        $sizes=DB::table('product_size')->get();
        $unit_prices=Unit_price::where('status',1)->first();
        return view('admin.order_detail.index',compact('order_details','order','sizes','unit_prices'));
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
        Order::where('id',$id)->delete();
        Orderdetail::where('order_id',$id)->delete();
        return redirect()->back()->with(array(
            'order_delete' => 'success',
        ));
    }
}
