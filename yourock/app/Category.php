<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function instruments() {
        return $this->hasMany('App\Instruments');
    }
}
