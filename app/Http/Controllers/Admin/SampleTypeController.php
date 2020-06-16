<?php

namespace App\Http\Controllers\Admin;

use App\Sample;
use App\Sample_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SampleTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sample_types=Sample_type::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.sample_type.index',compact('sample_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sample_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sample_type::create([
            'name'=>$request['name'],
        ]);
        return redirect(route('sample_type.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sample_type $sample_type)
    {
        $samples=Sample::where('sample_type_id',$sample_type->id)->orderBy('id','DESC')->get();
        return view('admin.sample.index',compact('sample_type','samples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample_type $sample_type)
    {
        return view('admin.sample_type.edit',compact('sample_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample_type $sample_type)
    {
        $data=$request->all();
        $sample_type->update($data);
        return redirect(route('sample_type.edit',['id'=>$sample_type->id]));
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
