<?php

namespace App\Http\Controllers\Admin;

use App\Sample;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sample_image;

class SampleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $samples=Sample::orderBy('id','DESC')->get();
        return view('admin.sample.index',compact('samples'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $services=Service::where('status',1)->get();
        return view('admin.sample.create',compact('services'));
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
        $target='images/samples/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);

        $sample=Sample::create([
            'service_id'=>$request['sample_type_id'],
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'description'=>$request['description'],
            'text'=>$request['text'],
            'image'=>$image,
        ]);

        return redirect(route('sample.index'));
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
    public function edit(Sample $sample)
    {
        $services=Service::where('status',1)->get();
        $images=Sample_image::where('sample_id',$sample->id)->get();
        return view('admin.sample.edit',compact('sample','services','images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/samples/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$sample->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Sample::Where('id',$sample->id)->Update(array('image'=>$image));
        }
        $data=$request->except('image');
        $sample->update($data);

        return redirect(route('sample.edit',['id'=>$sample->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        $old_image=public_path('/images/samples/').$sample->image;
        if(is_file($old_image)) {
            unlink($old_image);
        }
        $sample->delete();
        return redirect(route('sample.index'));
    }
}
