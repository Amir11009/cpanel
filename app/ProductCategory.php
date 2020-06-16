<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $fillable = [
        'title', 'slug', 'parent_id','image', 'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
