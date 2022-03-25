<?php

namespace App;

use App\Port;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    //

    public function ports()
    {
        return $this->hasMany(Port::class);
    }

}
