<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

use App\Http\Requests;
use Illuminate\Http\Request;
use Mail;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function resetPassword(){
        $data = array('name'=>"Maryami Gold");

        Mail::send('mail',['name'=>'maryamigold'], function($message) {
            $message->to('mr.narenjilar@gmail.com', 'Tutorials Point')->subject
            ('change password');
            $message->from('info@maryamigold.com','maryamigold');
        });
        echo "Basic Email Sent. Check your inbox.";
    }
}
