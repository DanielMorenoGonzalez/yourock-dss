<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Orderline;

class Order extends Model
{
    public $timestamps = false;

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }
}
