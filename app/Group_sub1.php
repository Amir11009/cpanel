<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group_sub1 extends Model
{
    protected $fillable = [
        'name','group_main_id', 'image' , 'status',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function group_main()
    {
        return $this->belongsTo(Group_main::class);
    }

    public function group_sub2()
    {
        return $this->belongsToMany(Group_sub2::class);
    }

    public function off_product()
    {
        return $this->belongsTo(Off_product::class);
    }
}
