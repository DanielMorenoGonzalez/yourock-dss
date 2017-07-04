<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Instrument;
use DB;

class CategoriesController extends Controller
{
    public function create(){
        return view('categories.create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max:50|unique:categories',
            'description' => 'required|max:255',
		]);

        $category = new Category([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        $category->save();

        return redirect()->action('CategoriesController@indexForAdmin')->with('categorycreate', '¡Categoría creada!');
    }

    //Con este método tenemos todas las categorías
    public function index() {
        $categories = Category::all();
        return view('categories.index', ['categories' => $categories]);
    }

    public function indexForAdmin() {
        $categories = Category::paginate(10);
        return view('categories.indexforadmin', ['categories' => $categories]);
    }

    //Con este método tenemos los productos de cada categoría, el total y la paginación
    public function show($id){
        $category = Category::findOrFail($id);
        $instruments = $category->instruments()->paginate(5);
        return view('categories.show', array('category' => $category, 'instruments' => $instruments));
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('home');
    }
}
