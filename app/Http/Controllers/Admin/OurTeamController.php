<?php

namespace App\Http\Controllers\Admin;

use App\OurTeam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OurTeamController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $our_teams = OurTeam::orderBy('id','DESC')->get();
        return view('admin.ourTeam.index',compact('our_teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.ourTeam.create');
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
        $file=$request['image'];
        $target='images/ourTeam/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);
        $our_team = OurTeam::create([
            'name' => $request['name'],
            'role' => $request['role'],
            'description' => $request['description'],
            'image' => $image,
            'instagram' => $request['instagram'],
            'facebook' => $request['facebook'],
            'linkedin' => $request['linkedin'],
            'twitter' => $request['twitter'],
            'status' => $request['status']
        ]);

        return redirect(route('ourTeam.index'));

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
        $our_team = OurTeam::find($id);
        return view('admin.ourTeam.edit',compact('our_team'));
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
        $our_team = OurTeam::find($id);
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/OurTeam/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$our_team->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            OurTeam::Where('id',$our_team->id)->Update(array('image'=>$image));
        }
        $data=$request->except('image');
        $our_team->update($data);
        return redirect()->back();

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
        $our_team=OurTeam::find($id);
        $our_team->delete();
        return redirect()->back();
    }
}
