<?php

namespace App\Http\Controllers;

use App\Category;
use App\Instrument;
use Illuminate\Http\Request;
use DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function indexCategories() {
        $categories = Category::paginate(10);
        return view('categories.indexforadmin', (['categories' => $categories]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
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
            'name' => 'required|max:50|unique:categories',
            'description' => 'required|max:255',
		]);

        $category = new Category([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);
        $category->save();

        return redirect()->action('CategoriesController@indexCategories')->with('categorycreate', '¡Categoría creada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    public function showDetails($id) {
        //$instruments = new Instrument;
        //$category = Category::find($category);
        //$this->category = $category;
        //$instruments = Instrument::all();
        $category = Category::findOrFail($id);
        $instruments = $category->instruments()->paginate(5);
        return view('categories.showforadmin', array('category' => $category, 'instruments' => $instruments));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $instruments = Instrument::whereNull('category_id')->get();
        return view('categories.edit', array('category' => $category, 'instruments' => $instruments));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
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

        return redirect()->action('CategoriesController@indexCategories')->with('categoryupdate', '¡Categoría actualizada!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
