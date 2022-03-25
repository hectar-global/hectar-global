<?php

namespace App;

use App\Country;
use Illuminate\Database\Eloquent\Model;

class Port extends Model
{
    //

    public function countries()
    {
        return $this->belongsTo('App\Country', 'country_id', 'id');
    }
}
