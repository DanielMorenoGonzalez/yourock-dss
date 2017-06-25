<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Nanigans\SingleTableInheritance\SingleTableInheritanceTrait;
use App\Order;

class User extends Authenticatable
{
    use Notifiable;
    use SingleTableInheritanceTrait;

    protected $table = "users";

    protected static $singleTableTypeField = 'type';
    protected static $singleTableSubclasses = [Customer::class];
    protected static $persisted = ['nif', 'name', 'surname', 'phoneNumber', 'email', 'password'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /*
    protected $fillable = [
        'nif', 'name', 'surname', 'address', 'city', 'province', 'zipCode', 'phoneNumber', 'email', 'password',
    ];
    */
    

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function isCustomer() {
        return $this->type == 'customer';
    }
}
