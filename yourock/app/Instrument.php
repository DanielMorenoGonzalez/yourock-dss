<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Orderline;

class Instrument extends Model
{
    public $timestamps = false;

    public function category() {
        //Instrument tiene la clave ajena category_id
        return $this->belongsTo('App\Category');
    }

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }
    
}
