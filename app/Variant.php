<?php

namespace App;

use App\Price;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    //

    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function price()
    {
        return $this->hasMany(Price::class);

    }
}
