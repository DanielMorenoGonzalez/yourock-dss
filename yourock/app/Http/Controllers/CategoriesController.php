<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Instrument;

class CategoriesController extends Controller
{
    //Con este método tenemos los instrumentos que pertenecen a una determinada categoría
    public function getProductsByCategory($id) {
        $category = Category::findOrFail($id);
        $instruments = $category->instruments;
        return view('home', array('category' => $category->name, 'instruments' => $instruments));
    }

    //Con este método tenemos todas las categorías
    public function getCategories() {
        $categories = Category::all();
        return view('categories', ['categories' => $categories]);
    }
}
