<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome', array('name' => 'Dany', 'age' => '22'));
});
*/

//Prueba para mostrar todas las categorías
Route::get('categories', 'CategoriesController@showAll');

//Prueba para mostrar el nombre de una categoría
Route::get('categories/{id}', 'CategoriesController@showCategoryById');

//Prueba para mostrar el id de un usuario
Route::get('user/{id}', function($id) {
    return 'User ' . $id;
});

//Prueba para mostrar el nombre de un usuario
Route::get('user/{name?}', function($name = null) {
    return 'User ' . $name;
});
