<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Favorite_product extends Model
{
    protected $fillable = [
        'product_id', 'status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
