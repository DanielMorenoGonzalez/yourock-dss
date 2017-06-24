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

    //Con este método tenemos los productos de cada categoría, el total y la paginación
    public function show($id){
        $category = Category::findOrFail($id);
        $instruments = $category->instruments()->paginate(5);
        return view('categories.show', array('category' => $category, 'instruments' => $instruments));
    }
}
