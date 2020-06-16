<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sample_image extends Model
{
    protected $fillable = [
        'sample_id', 'image', 'status',
    ];

    public function sample()
    {
        return $this->belongsTo(Sample::class);
    }
}
