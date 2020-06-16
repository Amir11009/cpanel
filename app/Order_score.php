<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_score extends Model
{
    protected $fillable = [
        'score_start', 'score_end', 'off_price',
        'off_darsad', 'status',
    ];
}
