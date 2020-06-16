<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Special_pack extends Model
{
    protected $fillable = [
        'name', 'icon', 'status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
