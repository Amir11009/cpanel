<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'category_id' , 'title' , 'text' , 'slug' , 'image' , 'home_image' , 'status' , 'show_home' , 'description',
    ];

    public function service_category()
    {
        return $this->belongsTo(ServiceCategory::class,'category_id');
    }

    public function service_pack()
    {
        return $this->hasMany(ServicePack::class);
    }

    public function service_details()
    {
        return $this->hasMany(ServiceDetail::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
