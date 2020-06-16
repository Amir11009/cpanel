<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\Setting;
use App\Ip;
use App\News_table;
use App\Slider;
use App\ServiceCategory;
use App\About;
use App\Article;
use App\ProductCategory;
use App\Special_product;
use App\New_product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $seting=Setting::where('status',1)->get()->first();
        $expire_date=$seting->expire_date;
        $today=date('Y-m-d H:i:s');
        // if($expire_date<$today){
        //  return 'Your Site Is Expired ! Please Call To 021 - 877 00 138';
        //  die();
        // }

        $sliders=Slider::orderBy('priority','DESC')->get();
        $service_categories=ServiceCategory::where('status',1)->get();
        $brands=Brand::where('status',1)->get();
        $about=About::first();
        $product=Product::where('status',1)->orderBy('id','desc')->get()->take(4);
        $special_products=Special_product::where('status',1)->orderBy('id','desc')->get();
        $new_products=New_product::where('status',1)->orderBy('id','desc')->get()->take(19);
        $new_product_last=New_product::where('status',1)->orderBy('id','desc')->get()->take(6);
        $product_categories=ProductCategory::where('status',1)->get()->take(3);
        $articles=Article::where('status',1)->orderBy('id','desc')->get()->take(6);
        return view('welcome',compact('new_product_last','new_products','special_products','product_categories','sliders','service_categories','about','samples','articles','brands','product'));
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
}
