<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;
use App\User;
use Illuminate\Support\Facades\Hash;

class ResetPassController extends Controller
{

    public function mail(Request $request)
    {
        $email=$request['email'];
        $user_count=User::where('email',$email)->get()->count();
        if($user_count==1){
            $user=User::where('email',$email)->get()->first();
            $new_pass='a1$'.str_random(6);
            $new_pass_hash=Hash::make($new_pass);
            User::where('id',$user->id)->update(['password'=>$new_pass_hash]);
            $data = array('name'=>"Maryami Gold" , 'site_name'=>"مریمی گلد" , 'user_name'=>$user->name , 'user_email'=>$user->email , 'new_pass'=>$new_pass);
            $email_send=Mail::send('mail',$data, function($message) {
                $message->to($_REQUEST['email'], '')->subject
                ('change password');
                $message->from('info@maryamigold.com','maryamigold');
            });
            if($email_send=='' || $email_send==null){
                return redirect('/login')->with([
                    'pass_reset' => 'success'
                ]);
            }
            else{
                return redirect()->back()->with([
                    'pass_reset' => 'fail'
                ]);
            }
        }
        elseif($user_count==0){
            return redirect()->back()->with([
                'user_exist' => 'fail'
            ]);
        }
        else{
            return 'hiii2';
        }
    }


}