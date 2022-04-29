<?php

namespace App;

use App\Type;
use App\Price;
use App\Country;
use App\Freight;
use App\Gallery;
use App\Quality;
use App\Variant;
use App\Category;
use App\Packaging;
use App\Certificate;
use App\ProductsDetails;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function freight()
    {
        return $this->hasMany(Freight::class);
    }

    public function packaging()
    {
        return $this->hasMany(Packaging::class);
    }

    public function certificate()
    {
        return $this->hasMany(Certificate::class);
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function details()
    {
        //return $this->hasOne(ProductsDetails::class);
        return $this->hasOne(ProductsDetails::class, 'product_id', 'id');
    }

    public function variant()
    {
        return $this->hasMany(Variant::class);
    }

    public function type()
    {
        return $this->hasMany(Type::class);
    }

    public function quality()
    {
        return $this->hasMany(Quality::class);
    }

    public function price()
    {
        return $this->hasOne(Price::class);
    }

    public function countries()
    {
        return $this->hasMany(Country::class, 'id', 'country');
    }
}
