<?php

namespace App\Http\Controllers\Admin;

use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class GroupMainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $group_mains=Group_main::all();
        return view('admin.group_main.index',compact('group_mains'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.group_main.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Group_main::create([
            'name'=>$request['name'],
            'status'=>$request['status'],
        ]);
        return redirect(route('group_main.index'));
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
    public function edit(Group_main $group_main)
    {
        return view('admin.group_main.edit',compact('group_main'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group_main $group_main)
    {
        $data=$request->all();
        $group_main->update($data);
        return redirect(route('group_main.edit',['id'=>$group_main->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group_main $group_main)
    {
        DB::table('products')
            ->where('group_main_id', $group_main->id)
            ->update(['status' => 0]);

        DB::table('group_sub1s')
            ->where('group_main_id', $group_main->id)
            ->update(['status' => 0]);

        $group_sub1s=Group_sub1::where('group_main_id',$group_main->id)->get();
        foreach ($group_sub1s as $group_sub1){
            DB::table('group_sub2s')
                ->where('group_sub1_id', $group_sub1->id)
                ->update(['status' => 0]);
        }
        DB::table('group_mains')
            ->where('id', $group_main->id)
            ->update(['status' => 0]);
        return redirect(route('group_main.index'));
    }
}
