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

//Ruta para mostrar una categoría con sus respectivos instrumentos
Route::get('categories/{category}', 'CategoriesController@show');

//Ruta para mostrar un instrument específico
Route::get('instruments/{instrument}', 'InstrumentsController@show');

//Ruta para mostrar la página de contacto
Route::get('contact', 'ContactController@index');

Route::get('user/profile', 'UsersController@show');
Route::post('register', 'UsersController@store');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');
//Route::get('login', 'LoginController@login');

Auth::routes();
Route::get('/home', 'HomeController@index');
