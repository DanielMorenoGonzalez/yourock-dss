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

    //Función que devuelve el nombre de un instrumento
    public function getName() {
        return $this->name;
    }

    //Función que devuelve la descripción de un instrumento
    public function getDescription() {
        return $this->description;
    }

    //Función que devuelve el stock de un instrumento
    public function getStock() {
        return $this->stock;
    }

    //Función que devuelve el precio de un instrumento
    public function getPrice() {
        return $this->price;
    }

    //Función que devuelve la url de la foto de un instrumento
    public function getUrlPhoto() {
        return $this->urlPhoto;
    }
}
