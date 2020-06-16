<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpanel extends Model
{
    //
    protected $fillable=[
        'user_name','site_url','site_type','site_name','theme_code','status'
    ];

}
