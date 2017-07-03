<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Category;
use App\Orderline;

class Instrument extends Model
{
    use SoftDeletes;
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    public $timestamps = false;

    public function category() {
        //Instrument tiene la clave ajena category_id
        return $this->belongsTo('App\Category');
    }

    public function orderlines() {
        return $this->hasMany('App\Orderline');
    }
    
}
