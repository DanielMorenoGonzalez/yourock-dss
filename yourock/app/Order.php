<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderline;
use App\User;
use Session;

class Order extends Model
{
    //Array que utilizaremos para añadir al carrito de la compra temporalmente
    public $items = array();
    public $timestamps = false;

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }

    public function user() {
        //Order tiene la clave ajena user_id
        return $this->belongsTo('App\User');
    }

    //Método para obtener el total del pedido
    public function getTotal(){
        $total = 0;
        $orderlines = $this->getOrderlines();
        foreach($orderlines as $orderline){
            $total += $orderline->getSubtotal();
        }
        return $total;
    }

    
    //Método para añadir la línea de pedido a la lista de items (de pedidos)
    public function addShoppingCart() {
        $this->items[] = Session::get('orderline');
        //$clave = array_search('orderline.id_instrument', $this->items); // $clave = 2;
        //\Log::info($clave); 
        return $this->items;

    }
    

    //Método para obtener las líneas de pedido del pedido actual
    public function getOrderlines() {
        return $this->orderlines;
    }

}
