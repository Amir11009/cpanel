<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Off_product extends Model
{
    protected $fillable = [
        'product_id' ,
    ];

    public function group_sub1()
    {
        return $this->belongsTo(Group_sub1::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
