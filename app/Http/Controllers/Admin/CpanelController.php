<?php

namespace App\Http\Controllers\Admin;

use App\Cpanel;
use App\CpanelHelper\cPanel_meta;
use App\CpanelHelper\CpanelConfig;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CpanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cpanels = Cpanel::all();
        return  view('admin.cpanel.index', compact('cpanels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return  view('admin.cpanel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $domain =['domain' => $request['domain']];
        $parameter =[
            'domain'=>$request['domain'],
            'rootdomain'=> 'imaagahi.ir',
            'dir'=>'/public_html',
            'dissallowdot'=>1,
        ];
        $add_cpanel = new cPanel_meta("imaagahi", "##Ima1391$$", 'imaagahi.ir');
        $add_cpanel->cpanelMaker($parameter);
        $add_cpanel->databaseMaker($domain);
        $status_request =$request['status'];
        $status= 0;
        if ($status_request == 'on'){
            $status =1;
        }
        $type_request = $request['site_type'];
        $type= 0;
        if($type_request == 'on'){
            $type = 1;
        }
        $site=Cpanel::create([
            'user_name' =>$request['user_name'],
            'site_name' =>$request['site_name'],
            'site_url' =>$request['site_url'],
            'site_type' =>$type,
            'domain' =>$request['domain'],
            'theme_code' =>0,
            'status' =>$status
        ]);
        return redirect()->back()->with(array(
         'status' =>'success'
        ));
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
