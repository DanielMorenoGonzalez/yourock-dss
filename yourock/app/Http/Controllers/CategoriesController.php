<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Instrument;
use DB;

class CategoriesController extends Controller
{
    //Con este método tenemos todas las categorías
    public function index() {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    //Con este método tenemos los productos de todas las categorías, el total y la paginación
    public function show($id){
        $category = Category::findOrFail($id);
        //Contamos el total de instrumentos de la categoría actual
        $instrumentsCount = $category->getInstrumentsByCategory($id)->count();
        $instruments = $category->getInstrumentsByCategory($id)->paginate(5);
        return view('categories.show', array('category' => $category, 'instrumentsCount' => $instrumentsCount, 'instruments' => $instruments));
    }
}
