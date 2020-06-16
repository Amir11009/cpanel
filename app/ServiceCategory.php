<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    protected $fillable = [
        'title' , 'slug' , 'description' , 'text' , 'image' , 'home_image' , 'show_home' , 'status',
    ];

    public function services()
    {
        return $this->hasMany(Service::class,'category_id');
    }

    public function items()
    {
        return $this->hasMany(Item::class,'category_id');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
