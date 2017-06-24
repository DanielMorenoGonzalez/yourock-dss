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

}
