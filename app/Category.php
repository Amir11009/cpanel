<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title', 'slug' , 'status'
    ];

    public function article()
    {
        return $this->belongsToMany(Article::class);
    }
}
