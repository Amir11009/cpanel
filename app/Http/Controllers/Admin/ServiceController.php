<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use App\ServiceCategory;

class ServiceController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services=Service::all();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service_categories=ServiceCategory::where('status',1)->get();
        return view('admin.services.create',compact('service_categories'));
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
        if($file!='' || $file!=null){
            $target='images/services/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
        }
        else{
            $image='';
        }

        $file=$request['home_image'];
        if($file!='' || $file!=null) {
            $target = 'images/services_home/';
            $width = 0;
            $height = 0;
            $image_home = $this->ImageUploader($file, $target, $width, $height);
        }
        else{
            $image_home='';
        }

        $service=Service::create([
            'category_id'=>$request['category_id'],
            'title'=>$request['title'],
            'description'=>$request['description'],
            'slug'=>$request['slug'],
            'text'=>$request['text'],
            'image'=>$image,
            'home_image'=>$image_home,
            'status'=>$request['status'],
            'show_home'=>$request['show_home'],
        ]);

        return redirect(route('service.index'))->with(array(
            'service_create' => 'success',
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
        $service=Service::where('id',$id)->get()->first();
        $service_categories=ServiceCategory::where('status',1)->get();
        return view('admin.services.edit',compact('service','service_categories'));
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
        $service=Service::where('id',$id)->get()->first();
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/services/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$service->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            Service::where('id',$id)->Update(array('image'=>$image));
        }

        if($request->hasFile('home_image')) {
            $file=$request['home_image'];
            $target = 'images/services_home/';
            $width = 0;
            $height = 0;
            $image_home = $this->ImageUploader($file, $target, $width, $height);
            $old_image_home = $service->home_image;
            if (is_file($old_image_home)) {
                unlink($old_image_home);
            }
            Service::where('id',$id)->Update(array('home_image'=>$image_home));
        }

        $data=$request->except('image','home_image');
        $service->update($data);
        return redirect()->back()->with(array(
            'service_update' => 'success',
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
        $service=Service::where('id',$id)->get()->first();
        $old_image=$service->image;
        if(is_file($old_image)) {
            unlink($old_image);
        }
        Service::where('id',$id)->delete();
        return redirect(route('service.index'))->with(array(
            'service_delete' => 'success',
        ));
    }
}
