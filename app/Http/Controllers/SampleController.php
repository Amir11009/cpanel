<?php

namespace App\Http\Controllers;

use App\Sample;
use App\Sample_type;
use Illuminate\Http\Request;
use App\Service;
use App\ServiceCategory;


class SampleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sample_types=Sample_type::where('status',1)->get();
        $samples=Sample::where('status',1)->orderBy('id', 'DESC')->get();
        return view('web_samples',compact('samples','sample_types'));
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
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sample=Sample::where('id',$id)->get()->first();
        $samples=Sample::where('sample_type_id',$sample->sample_type_id)->get();
        return view('web_sample_details',compact('sample','samples'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function edit(Sample $sample)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sample $sample)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sample  $sample
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sample $sample)
    {
        //
    }

    public function home_index()
    {
        $samples=Sample::where('status',1)->orderBy('id','DESC')->take(8)->get();
        $home_service=Service::where('title','طراحی سایت اعتباری')->get()->first();
        $service_categories=ServiceCategory::where([['status',1],['show_home',1]])->orderBy('id','desc')->get();
        $services=Service::where([['status',1],['show_home',1]])->orderBy('id','desc')->get();
        return view('welcome',compact('samples','home_service','service_categories','services'));
    }

    public function about()
    {
        $samples=Sample::where('status',1)->orderBy('id','DESC')->take(8)->get();
        $services=Service::where([['status',1],['show_home',1]])->orderBy('id','desc')->get();
        return view('about',compact('samples','services'));
    }
}
