<?php

namespace App\Http\Controllers\User;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ChangePassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function show(Order $order)
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

    public function change_pass()
    {
        return view('user.change_pass');
    }

    public function change_pass_update(Request $request)
    {
        $old_pass=$request['old_pass'];
        $new_pass=$request['new_pass'];
        $confirm_new_pass=$request['confirm_new_pass'];

        if(Hash::check($old_pass, auth()->user()->password)){
            if($new_pass==$confirm_new_pass){
                $new_pass_hash=Hash::make($new_pass);
                User::where('id',auth()->user()->id)->update(['password'=>$new_pass_hash]);
                return redirect()->back()->with([
                    'change_pass' => 'success'
                ]);
            }
            else{
                return redirect()->back()->with([
                    'new_confirm' => 'fail'
                ]);
            }
        }
        else{
            return redirect()->back()->with([
                'old_pass' => 'fail'
            ]);
        }
    }
}
