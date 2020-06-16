<?php

namespace App\Http\Controllers\Admin;

use App\Ip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Hekmatinasser\Verta\Verta;

class IpController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $date1=date('Y-m-d',strtotime("-4 days"));
        $date2=date('Y-m-d',strtotime("-3 days"));
        $date3=date('Y-m-d',strtotime("-2 days"));
        $date4=date('Y-m-d',strtotime("-1 days"));
        $date5=date('Y-m-d');

        $date1_res=Ip::where('date',$date1)->get()->count();
        $date2_res=Ip::where('date',$date2)->get()->count();
        $date3_res=Ip::where('date',$date3)->get()->count();
        $date4_res=Ip::where('date',$date4)->get()->count();
        $date5_res=Ip::where('date',$date5)->get()->count();

        $dates=[$date5,$date4,$date3,$date2,$date1];
        $date_res=[$date5_res,$date4_res,$date3_res,$date2_res,$date1_res];

        return view('admin.ip.index',compact('date_res','dates'));
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
    public function show($date)
    {
        $ips=Ip::where('date',$date)->get();
        return view('admin.ip.detail',compact('ips','date'));
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
        //
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
