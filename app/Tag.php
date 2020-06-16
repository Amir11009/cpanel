<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'title','slug','status'
    ];
    public function article()
    {
        return $this->belongsToMany('App\Article');
    }
    public function product()
    {
        return $this->belongsToMany('App\Product');
    }
}
