<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Off_pack extends Model
{
    protected $fillable = [
        'off_name', 'group_sub1_id',
        'group_type', 'first' , 'status',
    ];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
