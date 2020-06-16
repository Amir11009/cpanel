<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'user_id','title', 'slug' , 'description', 'text',
        'main_image', 'short_image','status'
    ];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function article_comments()
    {
        return $this->hasMany('App\ArticleComment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
