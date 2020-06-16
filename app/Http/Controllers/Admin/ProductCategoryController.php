<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories=ProductCategory::all();
        return view('admin.product_category.index',compact('product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories=ProductCategory::all();
        return view('admin.product_category.create',compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request['image'];
        $target='images/product_category/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);

        ProductCategory::create([
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'parent_id'=>$request['parent_id'],
            'image'=>$image,
            'status'=>$request['status'],
        ]);
        return redirect(route('product_category.index'))->with(array(
            'product_category_create' => 'success',
        ));
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
        $product_category=ProductCategory::where('id',$id)->get()->first();
        $categories=ProductCategory::where('status',1)->get();
        return view('admin.product_category.edit',compact('product_category','categories'));
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
        $product_category=ProductCategory::where('id',$id)->get()->first();
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/product_category/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$product_category->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            ProductCategory::where('id',$id)->Update(array('image'=>$image));
        }

        $data=$request->except('image');
        $product_category->update($data);
        return redirect()->back()->with(array(
            'product_category_update' => 'success',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_category=ProductCategory::where('id',$id)->get()->first();
        $old_image=$product_category->image;
        if(is_file($old_image)) {
            unlink($old_image);
        }
        $pro_cats=ProductCategory::where('parent_id',$id)->get();
        foreach($pro_cats as $pro_cat){
            Product::where('category_id',$pro_cat)->delete();
        }
        ProductCategory::where('parent_id',$id)->delete();
        Product::where('category_id',$id)->delete();
        ProductCategory::where('id',$id)->delete();
        return redirect(route('product_category.index'))->with(array(
            'product_category_delete' => 'success',
        ));
    }
}
