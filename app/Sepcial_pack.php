<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sepcial_pack extends Model
{
    protected $fillable = [
        'name', 'icon', 'status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
