<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Packaging extends Model
{
    protected $table = 'packagings';


    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }


}
