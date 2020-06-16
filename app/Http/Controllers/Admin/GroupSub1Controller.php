<?php

namespace App\Http\Controllers\Admin;

use App\Group_main;
use App\Group_sub1;
use App\Off_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupSub1Controller extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_sub1s=Group_sub1::all();
        return view('admin.group_sub1.index',compact('group_sub1s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group_mains=Group_main::all();
        return view('admin.group_sub1.create',compact('group_mains'));
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
        $image=$this->ImageUploader_group_sub1($file);

        Group_sub1::create([
            'name'=>$request['name'],
            'group_main_id'=>$request['group_main_id'],
            'image'=>$image,
        ]);

        return redirect(route('group_sub1.index'));
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
    public function edit(Group_sub1 $group_sub1)
    {
        $group_mains=Group_main::all();
        return view('admin.group_sub1.edit',compact('group_sub1','group_mains'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group_sub1 $group_sub1)
    {
        $data=$request->all();
        $group_sub1->update($data);
        return redirect(route('group_sub1.edit',['id'=>$group_sub1->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group_sub1 $group_sub1)
    {
        $group_sub1->delete();
        return redirect(route('group_sub1.index'));
    }

    public function off_pro(Group_sub1 $group_sub1)
    {
        Off_product::create([
            'off_name' => "تست",
            'group_sub1_id' => $group_sub1->id,
            'group_type' => "زیرگروه1",
            'status' => 0,
        ]);
        return redirect(route('group_sub1.index'));
    }
}
