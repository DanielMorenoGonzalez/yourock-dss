<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;
use App\Category;
use DB;

class InstrumentsController extends Controller
{
    public function show($id) {
        $instrument = Instrument::findOrFail($id);
        return view('instruments.show', (['instrument' => $instrument]));
    }

    public function search($description) {
        $instruments = Order::search($description)->get();
        return view('instruments.index', (['instruments' => $instrument]));
    }

}
