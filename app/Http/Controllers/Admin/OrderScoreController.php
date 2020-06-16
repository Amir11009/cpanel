<?php

namespace App\Http\Controllers\Admin;

use App\Order_score;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderScoreController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_scores=Order_score::all();
        return view('admin.order_score.index',compact('order_scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.order_score.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Order_score::create([
            'score_start'=>$request['score_start'],
            'score_end'=>$request['score_end'],
            'off_price'=>$request['off_price'],
            'off_darsad'=>0,
        ]);
        return redirect(route('order_score.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Order_score $order_score)
    {
        return view('admin.order_score.edit',compact('order_score'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order_score $order_score)
    {
        $data=$request->all();
        $order_score->update($data);
        return redirect(route('order_score.edit',['id'=>$order_score->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order_score $order_score)
    {
        
    }
}
