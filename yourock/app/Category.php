<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;

class Category extends Model
{
    public $timestamps = false;

    public function instruments() {
        return $this->hasMany('App\Instrument');
    }

    //Con este método tenemos los instrumentos que pertenecen a una determinada categoría
    public function getInstrumentsByCategory($id) {
        $instruments = Instrument::where('category_id', $id);
        return $instruments;
    }

}
