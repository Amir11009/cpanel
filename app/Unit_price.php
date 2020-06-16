<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit_price extends Model
{
    protected $fillable = [
        'unit','price', 'status',
    ];
}
