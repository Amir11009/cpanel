<?php

namespace App\Http\Controllers\Admin;

use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupSub2Controller extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_sub2s=Group_sub2::all();
        return view('admin.group_sub2.index',compact('group_sub2s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $group_sub1s=Group_sub1::all();
        return view('admin.group_sub2.create',compact('group_sub1s'));
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
        $image=$this->ImageUploader_group_sub2($file);

        Group_sub2::create([
            'name'=>$request['name'],
            'group_sub1_id'=>$request['group_sub1_id'],
            'image'=>$image,
        ]);

        return redirect(route('group_sub2.index'));
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
    public function edit(Group_sub2 $group_sub2)
    {
        $group_sub1s=Group_sub1::all();
        return view('admin.group_sub2.edit',compact('group_sub2','group_sub1s'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group_sub2 $group_sub2)
    {
        $data=$request->all();
        $group_sub2->update($data);
        return redirect(route('group_sub2.edit',['id'=>$group_sub2->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group_sub2 $group_sub2)
    {
        $group_sub2->delete();
        return redirect(route('group_sub2.index'));
    }
}
