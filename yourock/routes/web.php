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

//Ruta para mostrar la página home
Route::get('/', 'HomeController@index');

//Ruta para mostrar todas las categorías
Route::get('categories', 'CategoriesController@index');

//Ruta para mostrar una categoría
Route::get('categories/{id}', 'CategoriesController@show');


