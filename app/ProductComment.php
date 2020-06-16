<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{

    protected $fillable = [
        'name','product_id','text','email','answer','status',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
