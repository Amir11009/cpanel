<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'title', 'slug' , 'image', 'description' ,
        'text', 'brand_link' , 'status',
    ];
}
