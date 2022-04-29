<?php

namespace App;

use App\User;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

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
}
