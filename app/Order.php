<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','refnum',
        'au_num','ref_id','status', 'zarinAuthority' ,
        'zarinStatus' , 'discount' ,'success', 'peyk' ,'arz_price' ,
    ];

    public function order_detail()
    {
        return $this->belongsToMany(Orderdetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
