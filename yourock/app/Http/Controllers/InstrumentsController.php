<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Instrument;
use App\Category;
use DB;
use Session;

class InstrumentsController extends Controller
{
    public function show($id) {
        $instrument = Instrument::findOrFail($id);
        return view('instruments.show', (['instrument' => $instrument]));
    }

    public function index() {
        $instruments = Instrument::paginate(10);
        return view('instruments.index', (['instruments' => $instruments]));
    }

    public function edit($id) {
        $instrument = Instrument::find($id);
        return view('instruments.edit', (['instrument' => $instrument]));
    }

}
