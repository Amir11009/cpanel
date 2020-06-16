<?php

namespace App\Http\Controllers;

use App\About;
use App\Brand;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Product;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('brands',compact('brands'));
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
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        $brand_id=$brand->id;
//        $products=Product::where('status',1)->latest()->paginate(20);
        $products=Product::where([['status',1],['name','LIKE','%'.$brand->e_name.'%']])->latest()->paginate(20);
        $group_mains=Group_main::where('status',1)->get();
        $group_sub1s=Group_sub1::where('status',1)->get();
        $group_sub2s=Group_sub2::where('status',1)->get();
        $brands=Brand::all();
        return view('shop',compact('products','group_mains','group_sub1s','group_sub2s','brands','brand_id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }

    public function about()
    {
        $brands=Brand::latest()->paginate(4);
        $about = About::first();
        return view('about',compact('brands','about'));
    }
}
