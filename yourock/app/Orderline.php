<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;
use App\Order;

class Orderline extends Model
{
    public $timestamps = false;

    public function instrument() {
        //Orderline tiene la clave ajena instrument_id
        return $this->belongsTo('App\Instrument');
    }

    public function order(){
        //Orderline tiene la clave ajena order_id
        return $this->belongsTo('App\Order');
    }

    public function getSubtotal(){
        $total = $this->quantity * $this->instrument->price;
        return $total;
    }

}
