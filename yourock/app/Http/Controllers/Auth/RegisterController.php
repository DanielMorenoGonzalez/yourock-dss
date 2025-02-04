<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nif' => 'required|max:9',
            'name' => 'required|max:20',
            'surname' => 'required|max:30',
            'address' => 'required|max:100',
            'province' => 'required',
            'city' => 'required',
            'zipCode' => 'required|max:5',
            'phoneNumber' => 'required|digits:9',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'nif' => $data['nif'],
            'name' => $data['name'],
            'surname' => $data['surname'],
            'address' => $data['address'],
            'city' => $data['city'],
            'province' => $data['province'],
            'zipCode' => $data['zipCode'],
            'phoneNumber' => $data['phoneNumber'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

}
