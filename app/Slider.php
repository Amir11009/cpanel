<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'image' , 'image_mobile' , 'priority' , 'title' ,
        'text','btn_text1', 'btn_link1' , 'btn_text2', 'btn_link2' , 'status' ,
    ];
}
