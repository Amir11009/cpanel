<?php

namespace App\Http\Controllers\Admin;

use App\Off_product;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class OffProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $off_products=Off_product::all();
        return view('admin.off_product.index',compact('off_products'));
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
    public function edit(Off_product $off_product)
    {
//        $group_sub1s=Group_sub1::where('status',1)->get();
//        return view('admin.off_product.edit',compact('off_product','group_sub1s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Off_product $off_product)
    {
//        $data=$request->all();
//        $off_product->update($data);
//        return redirect(route('off_product.edit',['id'=>$off_product->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Off_product $off_product)
    {
        Product::where('id',$off_product->product_id)->update(['off_percent'=>0]);
        Product::where('id',$off_product->product_id)->update(['off_rial'=>0]);
        $off_product->delete();
        return redirect()->back()->with(array(
            'off_product_delete' => 'success',
        ));
    }

//    public function off_all_index()
//    {
//        $off_alls=DB::table('off_alls')->get();
//        return view('admin.off_product.all',compact('off_alls'));
//    }
//
//    public function off_all_edit($id)
//    {
//        $off_all=DB::table('off_alls')->where('id',$id)->get()->first();
//        return view('admin.off_product.all_edit',compact('off_all'));
//    }
//
//    public function off_all_update(Request $request,$id)
//    {
//        DB::table('off_alls')->where('id',$id)->update(['off'=>$request['off'],'status'=>$request['status']]);
//        return redirect()->back();
//    }
}
