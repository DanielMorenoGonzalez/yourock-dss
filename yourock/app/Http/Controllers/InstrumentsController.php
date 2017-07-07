<?php

namespace App\Http\Controllers;

use App\Instrument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;
use DB;
use Session;

class InstrumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instruments = Instrument::paginate(10);
        return view('instruments.index', (['instruments' => $instruments]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('instruments.create', (['categories' => $categories]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50|unique:instruments',
            'description' => 'required|max:255',
            'price' => 'required|max:5',
            'stock' => 'required|max:3',
            'urlPhoto' => 'required|max:100',
            'manufacturer' => 'required|max:30',
		]);

        $instrument = new Instrument([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'urlPhoto' => $request->input('urlPhoto'),
            'manufacturer' => $request->input('manufacturer')
        ]);

        if($request->input('category') != ''){
            $category = Category::find($request->input('category'));
            $instrument->category()->associate($category);
        }

        $instrument->save();

        return redirect()->action('InstrumentsController@index')->with('instrumentcreate', '¡Instrumento creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instrument = Instrument::findOrFail($id);
        $category = $instrument->category;
        return view('instruments.show', array('instrument' => $instrument, 'category' => $category));
    }

    public function showDetails($id)
    {
        $instrument = Instrument::findOrFail($id);
        $category = $instrument->category;
        return view('instruments.showforadmin', array('instrument' => $instrument, 'category' => $category)); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function edit(Instrument $instrument)
    {
        $categories = Category::all();
        $category = $instrument->category;
        return view('instruments.edit', array('instrument' => $instrument, 'category' => $category, 'categories' => $categories));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instrument $instrument)
    {
        $this->validate($request, [
            'name' => 'max:50|unique:instruments',
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
            $instrument->updateStock($request->input('stock'));
            //$instrument->stock = $request->input('stock');
        }
        if($request->input('urlPhoto') != ''){
            $instrument->urlPhoto = $request->input('urlPhoto');
        }
        if($request->input('manufacturer') != ''){
            $instrument->manufacturer = $request->input('manufacturer');
        }
        if($request->input('category') != ''){
            $category = Category::find($request->input('category'));
            $instrument->category()->associate($category);
        }

        $instrument->save();

        return redirect()->action('InstrumentsController@index')->with('instrumentupdate', '¡Instrumento actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Instrument  $instrument
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instrument $instrument)
    {
        //Hacemos que el instrumento ya no apunte a ninguna categoría y lo borramos (softdelete)
        $instrument->category()->dissociate();
        $instrument->save();
        $instrument->delete();
        
        return redirect()->action('InstrumentsController@index')->with('instrumentdelete', '¡Instrumento borrado!');
    }
}
