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

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'quantity'
    ];

    //Método para obtener el instrumento perteneciente a la línea de pedido
    public function instrument() {
        //Orderline tiene la clave ajena instrument_id
        return $this->belongsTo('App\Instrument');
    }

    //Método para obtener el pedido al que pertenece la línea de pedido
    public function order(){
        //Orderline tiene la clave ajena order_id
        return $this->belongsTo('App\Order');
    }

    //Método para calcular el subtotal de la línea
    public function getSubtotal(){
        $total = $this->quantity * $this->instrument->price;
        return $total;
    }

}
