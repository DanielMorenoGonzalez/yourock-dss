<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends User
{
    protected static $singleTableType = 'customer';
    protected static $persisted = ['address', 'city', 'province', 'zipCode'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nif', 'name', 'surname', 'address', 'city', 'province', 'zipCode', 'phoneNumber', 'email', 'password',
    ];
}
