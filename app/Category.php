<?php

namespace App;

use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
