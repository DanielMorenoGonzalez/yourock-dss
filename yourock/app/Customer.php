<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends User
{
    protected static $singleTableType = 'customer';
    protected static $persisted = ['address', 'city', 'province', 'zipCode'];
}
