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
}
