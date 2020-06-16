<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ServiceCategory;

class ServiceCategoryController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories=ServiceCategory::all();
        return view('admin.service_category.index',compact('service_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service_category.create');
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
        $target='images/service_category/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);

        $file=$request['home_image'];
        $target='images/service_category_home/';
        $width=0;
        $height=0;
        $image_home = $this->ImageUploader($file,$target,$width,$height);

        ServiceCategory::create([
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'description'=>$request['description'],
            'text'=>$request['text'],
            'image'=>$image,
            'home_image'=>$image_home,
            'status'=>$request['status'],
            'show_home'=>$request['show_home'],
        ]);
        return redirect(route('service_category.index'))->with(array(
            'service_category_create' => 'success',
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
        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_category=ServiceCategory::where('id',$id)->get()->first();
        return view('admin.service_category.edit',compact('service_category'));
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
        $service_category=ServiceCategory::where('id',$id)->get()->first();
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/service_category/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$service_category->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            ServiceCategory::where('id',$id)->Update(array('image'=>$image));
        }

        if($request->hasFile('home_image')) {
            $file=$request['home_image'];
            $target = 'images/service_category_home/';
            $width = 0;
            $height = 0;
            $image_home = $this->ImageUploader($file, $target, $width, $height);
            $old_image_home = $service_category->home_image;
            if (is_file($old_image_home)) {
                unlink($old_image_home);
            }
            ServiceCategory::where('id',$id)->Update(array('home_image'=>$image_home));
        }

        $data=$request->except('image','home_image');
        $service_category->update($data);
        return redirect()->back()->with(array(
            'service_category_update' => 'success',
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
        $service_category=ServiceCategory::where('id',$id)->get()->first();
        $old_image=$service_category->image;
        if(is_file($old_image)) {
            unlink($old_image);
        }
        ServiceCategory::where('id',$id)->delete();
        return redirect(route('service_category.index'))->with(array(
            'service_category_delete' => 'success',
        ));
    }
}
