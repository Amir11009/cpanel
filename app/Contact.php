<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'image', 'address', 'site','email', 'tel', 'fax' , 'mobile', 'telegram', 'instagram',
        'twitter', 'linkdin', 'facebook', 'start_time', 'end_time' ,
    ];
}
