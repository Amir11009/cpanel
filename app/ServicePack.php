<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicePack extends Model
{
    protected $fillable = [
        'service_id', 'title', 'price' , 'status' ,
    ];
}
