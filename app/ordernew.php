<?php

namespace App;

use App\User;
use App\Product;
use App\Orderstatus;
use Illuminate\Database\Eloquent\Model;

class ordernew extends Model
{
    protected $table = 'ordersnew';

    public function user()
    {
       // return $this->hasMany(User::class);
       return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function product()
    {
       // return $this->hasMany(User::class);
       return $this->hasOne(Product::class, 'id', 'product_id');
    }

    public function ordersstatus()
    {
       // return $this->hasMany(User::class);
       return $this->hasMany(Orderstatus::class, 'order_id', 'id');
    }
}
