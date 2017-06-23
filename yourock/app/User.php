<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Order;

class User extends Authenticatable
{
    use Notifiable;

    //Atributo que no se asignará masivamente
    protected $guarded = ['type'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nif', 'name', 'surname', 'address', 'city', 'province', 'zipCode', 'phoneNumber', 'email', 'password',
    ];

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
}
