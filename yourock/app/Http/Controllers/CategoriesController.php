<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Instrument;

class CategoriesController extends Controller
{
    public function showCategoryById($id) {
        $category = Category::findOrFail($id);
        $instruments = $category->instruments;
        return view('home', array('category' => $category->name, 'instruments' => $instruments));
    }
}
