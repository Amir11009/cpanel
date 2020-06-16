<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_type extends Model
{
    protected $fillable = [
        'name','status',
    ];

    public function sample()
    {
        return $this->belongsToMany(Sample::class);
    }
}
