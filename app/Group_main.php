<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_main extends Model
{
    protected $fillable = [
        'name', 'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function group_sub1()
    {
        return $this->belongsToMany(Group_sub1::class);
    }
}
