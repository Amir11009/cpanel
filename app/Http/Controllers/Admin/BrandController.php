<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands=Brand::all();
        return view('admin.brand.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brand.create');
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
        $target='images/brand/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);

        Brand::create([
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'text'=>$request['text'],
            'description'=>$request['description'],
            'brand_link'=>$request['brand_link'],
            'status'=>$request['status'],
            'image'=>$image,
        ]);
        return redirect(route('brand.index'));
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
    public function edit(Brand $brand)
    {
        return view('admin.brand.edit',compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/brand/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$brand->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Brand::Where('id',$brand->id)->Update(array('image'=>$image));
        }

        $data=$request->except('image');
        $brand->update($data);
        return redirect(route('brand.edit',['id'=>$brand->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $old_image = 'img/brand/' . $brand->image;
        if (is_file($old_image)) {
            unlink($old_image);
        }
        $brand->delete();
        return redirect(route('brand.index'));
    }
}
