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

    //Método para actualizar un instrumento (esto lo hará el administrador)
    public function update(Request $request, $id) {
        $category = Category::find($id);

        $this->validate($request, [
            'name' => 'max:30',
            'description' => 'max:255',
		]);

        if($request->input('name') != ''){
            $category->name = $request->input('name');
        }
        if($request->input('description') != ''){
            $category->description = $request->input('description');
        }
        if($request->input('instrument') != ''){
            $instrument = Instrument::find($request->input('instrument'));
            $instrument->category()->associate($category);
            $instrument->save();
        }

        $category->save();

        return redirect()->action('CategoriesController@indexForAdmin')->with('categoryupdate', '¡Categoría actualizada!');
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

    public function edit($id) {
        $category = Category::find($id);
        $instruments = Instrument::whereNull('category_id')->get();
        return view('categories.edit', array('category' => $category, 'instruments' => $instruments));
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

    public function showForAdmin($id){
        $category = Category::findOrFail($id);
        $instruments = $category->instruments()->paginate(5);
        return view('categories.showforadmin', array('category' => $category, 'instruments' => $instruments));
    }

    public function destroy($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect('home');
    }
}
