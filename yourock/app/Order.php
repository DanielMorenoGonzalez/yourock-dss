<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderline;
use App\User;
use Session;

class Order extends Model
{
    //Array que utilizaremos para añadir al carrito de la compra
    public $items = array();
    public $timestamps = false;

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }

    public function user() {
        //Order tiene la clave ajena user_id
        return $this->belongsTo('App\User');
    }

    public function getTotal(){
        $total = 0.0;
        $orderlines = $this->orderlines;
        foreach($orderlines as $orderline){
            $total += $orderline->getSubtotal();
        }
        return $total;
    }

    public function addShoppingCart() {
        $this->items[] = Session::get('orderline');
        return $this->items;

    }
    
/*
    public function add($item, $id) {
        
        $storedItem = $item;
        if($this->items){
            if(array_key_exists($id, $this->items)){
                $storedItem = $this->items[$id];
            }
        }
        $this->items[$id] = $storedItem;
        
    }
    */

}
