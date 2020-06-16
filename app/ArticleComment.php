<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleComment extends Model
{
    protected $fillable = [
        'name','article_id','text','email','answer','status',
    ];

    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
