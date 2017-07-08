<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Orderline;
use App\User;
use Session;

class Order extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    //Array que utilizaremos para añadir al carrito de la compra temporalmente
    public $itemsCart = array();
    public $timestamps = false;

    //Método para obtener las líneas de pedido pertenecientes a un pedido
    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }

    //Método para obtener el usuario que ha realizado el pedido
    public function user() {
        //Order tiene la clave ajena user_id
        return $this->belongsTo('App\User');
    }

    //Método para obtener el total del pedido
    public function getTotal(){
        $total = 0;
        $orderlines = $this->orderlines;
        //Por cada línea de pedido obtenemos el subtotal
        foreach($orderlines as $orderline){
            $total += $orderline->getSubtotal();
        }
        return $total;
    }

    //Método para añadir la línea de pedido a la lista de items (de pedidos)
    public function addOrderlineToCart() {
        $this->itemsCart[] = Session::get('orderline');
        return $this->itemsCart;
    }

    //Método para calcular el total del carrito de la compra
    public function getTotalShoppingCart() {
        $total = 0;
        foreach(Session::get('order') as $orderlinePrueba){
            $instrument = $orderlinePrueba[0]->instrument;
            $total += $instrument->price * $orderlinePrueba[0]->quantity;
        }
        return $total;
    }

}
