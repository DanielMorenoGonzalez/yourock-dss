<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Instrument;
use DB;

class CategoriesController extends Controller
{
    //Con este método tenemos los instrumentos que pertenecen a una determinada categoría
    public function getProductsByCategory($id) {
        $category = Category::findOrFail($id);
        $instruments = $category->instruments;
        //Usamos paginación de 5 instrumentos por cada página
        $instruments = Instrument::where('category_id', $id)->paginate(5);
        return view('home', array('category' => $category->name, 'instruments' => $instruments));
    }

    //Con este método tenemos todas las categorías
    public function getCategories() {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }
}
