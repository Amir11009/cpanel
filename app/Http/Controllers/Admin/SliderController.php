<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders=Slider::orderBy('id','desc')->get();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
        $target='images/slider/';
        $width=0;
        $height=0;
        $main_image = $this->ImageUploader($file,$target,$width,$height);

        $file=$request['image_mobile'];
        $target='images/slider/mobile/';
        $width=0;
        $height=0;
        $image_mobile = $this->ImageUploader($file,$target,$width,$height);

        $slider=Slider::create([
            'title'=>$request['title'],
            'text'=>$request['text'],
            'btn_text1'=>$request['btn_text1'],
            'btn_link1'=>$request['btn_link1'],
            'btn_text2'=>$request['btn_text2'],
            'btn_link2'=>$request['btn_link2'],
            'priority'=>$request['priority'],
            'image'=>$main_image,
            'image_mobile'=>$image_mobile,
        ]);

        return redirect(route('slider.index'))->with(array(
            'slider_create' => 'success',
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
        $slider=Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
        $slider=slider::where('id',$id)->get()->first();
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/slider/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$slider->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            slider::where('id',$id)->Update(array('image'=>$image));
        }

        if($request->hasFile('image_mobile')){
            $file=$request['image_mobile'];
            $target='images/slider/mobile/';
            $width=0;
            $height=0;
            $image_mobile = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$slider->image_mobile;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            slider::where('id',$id)->Update(array('image_mobile'=>$image_mobile));
        }

        $data=$request->except('image','image_mobile');
        $slider->update($data);
        return redirect()->back()->with(array(
            'slider_update' => 'success',
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
        //
    }
}
