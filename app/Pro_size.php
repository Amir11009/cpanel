<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pro_size extends Model
{
    protected $fillable = [
        'pro_id', 'size_id','count_pack', 'count_box',
    ];
}
