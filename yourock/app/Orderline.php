<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;

class Orderline extends Model
{
    public $timestamps = false;

    public function instrument() {
        //Orderline tiene la clave ajena instrument_id
        return $this->belongsTo('App\Instrument');
    }
}
