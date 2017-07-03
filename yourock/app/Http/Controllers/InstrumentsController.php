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

    //Método para actualizar un instrumento (esto lo hará el administrador)
    public function update(Request $request, $id) {
        $instrument = Instrument::find($id);

        $this->validate($request, [
            'name' => 'max:30',
            'description' => 'max:255',
            'price' => 'max:5',
            'stock' => 'max:3',
            'urlPhoto' => 'max:100',
            'manufacturer' => 'max:30',
		]);

        if($request->input('name') != ''){
            $instrument->name = $request->input('name');
        }
        if($request->input('description') != ''){
            $instrument->description = $request->input('description');
        }
        if($request->input('price') != ''){
            $instrument->price = $request->input('price');
        }
        if($request->input('stock') != ''){
            $instrument->stock = $request->input('stock');
        }
        if($request->input('urlPhoto') != ''){
            $instrument->urlPhoto = $request->input('urlPhoto');
        }
        if($request->input('manufacturer') != ''){
            $instrument->manufacturer = $request->input('manufacturer');
        }

        $instrument->save();

        return redirect()->action('InstrumentsController@index')->with('instrumentupdate', 'Instrumento actualizado');
    }

}
