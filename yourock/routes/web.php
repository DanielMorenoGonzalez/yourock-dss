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

//Ruta para ver los pedidos de un usuario
Route::get('user/orders', 'OrdersController@index');

//Ruta mostrar el perfil de usuario
Route::get('user/profile', 'UsersController@show');

//Ruta para mostrar la página de editar usuario
Route::get('user/edit', 'UsersController@edit');

//Ruta para editar un usuario
Route::post('user/edit', 'UsersController@update');

//Ruta para borrar un usuario
Route::get('user/delete/{id}', 'UsersController@destroy');

Route::post('auth/register', 'UsersController@store');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Auth::routes();
//Ruta para mostrar la página home
Route::get('/home', 'HomeController@index');
