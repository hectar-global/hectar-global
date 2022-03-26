<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //protected $fillable = ['variant_id'];
    protected $fillable = ['price','variant_id','quality_id', 'product_id'];


}
