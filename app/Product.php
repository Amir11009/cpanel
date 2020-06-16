<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hekmatinasser\Verta\Verta;
class Product extends Model
{
    protected $fillable = [
       'user_id', 'category_id' , 'title', 'slug' , 'description', 'text' , 'code', 'made_by','change_aviz','material',
         'user_price','off_percent', 'off_rial' , 'rate', 'image', 'mojood', 'weight', 'status', 'product_count' , 'order_score' ,
    ];

    public function product_category()
    {
        return $this->belongsTo(ProductCategory::class,'category_id');
    }

    public function group_main()
    {
         return $this->belongsTo(Group_main::class);
    }

    public function group_sub1()
    {
        return $this->belongsTo(Group_sub1::class);
    }

    public function group_sub2()
    {
        return $this->belongsTo(Group_sub2::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function pro_image()
    {
        return $this->belongsToMany(Product_image::class);
    }

    public function order_detail()
    {
        return $this->belongsToMany(Orderdetail::class);
    }

    public function special_product()
    {
        return $this->belongsTo(Special_product::class);
    }

    public function off_product()
    {
        return $this->belongsTo(Off_product::class);
    }

    public function new_product()
    {
        return $this->belongsTo(New_product::class);
    }

    public function favorite_product()
    {
        return $this->belongsTo(Favorite_product::class);
    }

    public function off_pack()
    {
        return $this->belongsTo(Off_pack::class);
    }

    public function special_pack()
    {
        return $this->belongsTo(Special_pack::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
//    public function getRouteKeyName()
//    {
//        return 'name';
//    }
    public function product_comments()
    {
        return $this->hasMany(ProductComment::class);
    }
}
