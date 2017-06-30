<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Instrument;
use App\Category;
use Order;
use Orderline;
use DB;

class InstrumentsController extends Controller
{
    public function show($id) {
        $instrument = Instrument::findOrFail($id);
        return view('instruments.show', (['instrument' => $instrument]));
    }

}
