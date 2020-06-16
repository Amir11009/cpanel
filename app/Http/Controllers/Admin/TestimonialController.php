<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestimonialController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $testimonials = Testimonial::all()->get();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.testimonial.create');
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
        $target='images/testimonial/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);
       $testimonial = Testimonial::create([
           'title' => $request['title'],
           'text'  => $request['text'],
           'role'  => $request['role'],
           'status' => $request['status'],
           'image' => $image
       ]);
       return redirect(route('testimonial.index'));
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
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial'));
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
        $testimonial = Testimonial::find($id);
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/testimonial/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$testimonial->main_image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Testimonial::Where('id',$testimonial->id)->Update(array('image'=>$image));
        }
        $data=$request->except('image');
        $testimonial->update($data);
        return redirect(route('testimonial.edit',['id'=>$testimonial->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial=Testimonial::find($id);
        $testimonial->delete();
        return redirect(route('testimonial.index'));

    }
}
