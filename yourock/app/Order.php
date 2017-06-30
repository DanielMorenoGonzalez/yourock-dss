<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderline;
use App\User;

class Order extends Model
{
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

}
