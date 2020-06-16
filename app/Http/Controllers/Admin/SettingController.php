<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Setting;

class SettingController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting=Setting::first();
        return view('admin.setting.edit',compact('setting'));
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
        $setting=Setting::where('id',$id)->get()->first();
        if($request->hasFile('logo_header')){
            $file=$request['logo_header'];
            $target='images/setting/';
            $width=0;
            $height=0;
            $logo_header = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$setting->logo_header;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            Setting::where('id',$id)->Update(array('logo_header'=>$logo_header));
        }

        if($request->hasFile('logo_footer')){
            $file=$request['logo_footer'];
            $target='images/setting/';
            $width=0;
            $height=0;
            $logo_footer = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$setting->logo_footer;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            Setting::where('id',$id)->Update(array('logo_footer'=>$logo_footer));
        }

        if($request->hasFile('favicon')){
            $file=$request['favicon'];
            $target='images/setting/';
            $width=0;
            $height=0;
            $favicon = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$setting->favicon;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            Setting::where('id',$id)->Update(array('favicon'=>$favicon));
        }

        $data=$request->except('logo_header','logo_footer','favicon');
        $setting->update($data);
        return redirect()->back()->with(array(
            'setting_update' => 'success',
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
