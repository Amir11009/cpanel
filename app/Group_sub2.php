<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_sub2 extends Model
{
    protected $fillable = [
        'name','group_sub1_id', 'image' , 'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function group_sub1()
    {
        return $this->belongsTo(Group_sub1::class);
    }
}
