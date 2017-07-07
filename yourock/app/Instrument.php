<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;

class Instrument extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description', 'price', 'stock', 'urlPhoto', 'manufacturer'
    ];

    public $timestamps = false;


    public function category() {
        //Instrument tiene la clave ajena category_id
        return $this->belongsTo('App\Category');
    }

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }

    //Método para actualizar el stock (por parte de un administrador)
    public function updateStock($quantity) {
        $this->stock = $quantity;
    }

    //Método para decrementar el stock una vez se hace la compra
    public function decreaseStock($quantity){
        $this->stock -= $quantity;
    }

    //Método para comprobar que existen unidades del instrumento antes de proceder con la compra
    public function checkStock($quantity) {
        if($this->stock >= $quantity) {
            return true;
        }
        else{
            return false;
        }
    }
    
}
