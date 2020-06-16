<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $fillable = [
        'service_id', 'title', 'slug',
        'description', 'destination', 'improve_percent', 'text' ,
        'image', 'status',
    ];

    public function sample_type()
    {
        return $this->belongsTo(Sample_type::class);
    }

    public function technology()
    {
        return $this->belongsToMany(Technology::class);
    }

    public function sample_image()
    {
        return $this->hasMany(Sample_image::class);
    }

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id');
    }
}
