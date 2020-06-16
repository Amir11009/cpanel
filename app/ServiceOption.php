<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceOption extends Model
{
    protected $fillable = [
        'category_id', 'title', 'status' ,
    ];
}
