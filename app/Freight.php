<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Freight extends Model
{
    protected $table = 'freight';


    public function product()
    {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function countries()
    {
        return $this->belongsTo('App\Country', 'country', 'id');
    }

    public function ports()
    {
        return $this->belongsTo('App\Port', 'port', 'id');
    }
}
