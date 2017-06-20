<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Con esta función mostramos la página de inicio
    public function index() {
        return view('home');
    }
}
