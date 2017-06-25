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

//Ruta para mostrar la página de contacto
Route::get('contact', 'ContactController@index');

//Ruta para mostrar todas las categorías
Route::get('categories', 'CategoriesController@index');

//Ruta para mostrar una categoría con sus respectivos instrumentos
Route::get('categories/{category}', 'CategoriesController@show');

//Ruta para mostrar instrumentos
//Route::get('instruments/search', 'InstrumentsController@search');

//Ruta para mostrar un instrument específico con sus detalles
Route::get('instruments/{instrument}', 'InstrumentsController@show');

//Ruta para ver los pedidos de un usuario
Route::get('customer/orders', 'OrdersController@index');

//Ruta para ver un pedido concreto de un usuario
Route::get('customer/orders/{order}', 'OrdersController@show');

//Ruta mostrar el perfil de usuario
Route::get('customer/profile', 'CustomersController@show');

//Ruta para mostrar la página de editar usuario
Route::get('customer/edit', 'CustomersController@edit');

//Ruta para editar (acción) un usuario
Route::post('customer/edit', 'CustomersController@update');

//Ruta para borrar un usuario
Route::get('customer/delete/{id}', 'CustomersController@destroy');

Route::post('auth/register', 'CustomersController@store');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Auth::routes();
//Ruta para mostrar la página home
Route::get('/home', 'HomeController@index');
