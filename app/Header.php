<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $fillable = [
        'address', 'site','email', 'tel', 'mobile', 'telegram', 'instagram',
        'twitter', 'linkdin', 'facebook' ,
    ];
}
