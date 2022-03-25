<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsDetails extends Model
{
    protected $table = 'product_details';


    public function product()
    {
       // return $this->belongsTo('App\Product', 'product_id', 'id');
        return $this->belongsTo(Product::class);
    }
}
