<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Instrument;
use App\Order;


class Orderline extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function instrument() {
        //Orderline tiene la clave ajena instrument_id
        return $this->belongsTo('App\Instrument');
    }

    public function order(){
        //Orderline tiene la clave ajena order_id
        return $this->belongsTo('App\Order');
    }

    //Método para calcular el subtotal de la línea
    public function getSubtotal(){
        $total = $this->quantity * $this->getInstrument()->price;
        return $total;
    }

    //Método para obtener el instrumento perteneciente a la línea de pedido
    public function getInstrument() {
        return Instrument::find($this->instrument_id);
    }

    //Método para obtener el pedido al que pertenece la línea de pedido
    public function getOrder() {
        return Order::find($this->order_id);
    }

}
