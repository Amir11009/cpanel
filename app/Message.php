<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
       'type', 'user_name','text', 'email' ,
        'subject','tel','status',
    ];
}
