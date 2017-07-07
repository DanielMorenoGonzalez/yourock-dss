<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Instrument;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'description'
    ];

    public $timestamps = false;

    public function instruments() {
        return $this->hasMany('App\Instrument');
    }
}
