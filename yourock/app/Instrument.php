<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instrument extends Model
{
    public $timestamps = false;

    public function category() {
        //Instrument tiene la clave ajena category_id
        return $this->belongsTo('App\Category');
    }

}
