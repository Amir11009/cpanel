<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    protected $fillable = [
        'about_text', 'start_time', 'end_time' , 'copyright_text' ,  'address', 'site','email', 'tel', 'mobile', 'telegram', 'instagram',
        'twitter', 'linkdin', 'facebook' ,
    ];
}
