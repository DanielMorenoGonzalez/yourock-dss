<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UsersController extends Controller
{
    public function show(){
        return view('auth.register');
    }

    public function store(Request $request) {
        $user = new User;
        $user->nif = $request->input('nif');
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->province = $request->input('province');
        $user->zipCode = $request->input('zipCode');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->type = $request->input('type');
        $user->save();
    }
}
