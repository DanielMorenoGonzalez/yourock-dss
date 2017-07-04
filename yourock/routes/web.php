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
Route::get('/', function() {
    return view('home');
});

//Ruta para mostrar la página de contacto
Route::get('contact', function() {
    return view('contact');
})->name('contact');

//Ruta para enviar un email a nuestro contacto
Route::post('contact', 'ContactController@postContact');

//Ruta para mostrar la página sobre nosotros
Route::get('aboutus', function() {
    return view('aboutus');
})->name('aboutus');

//Ruta para añadir un instrumento al carrito de la compra
Route::get('addtocart/{id}', 'OrderlinesController@addInstrumentToCart');

Route::get('user/shoppingcart', 'OrdersController@addOrderlinesToOrder');

Route::get('shoppingcart', 'OrderlinesController@index')->name('shoppingcart');

Route::get('checkout', 'OrdersController@checkout')->middleware('auth')->name('checkout');

Route::post('checkout', 'OrdersController@postCheckout')->middleware('auth')->name('checkout');

//Ruta para mostrar todas las categorías (con algunos de sus instrumentos)
Route::get('categories', 'CategoriesController@index')->name('categories');

//Ruta para mostrar una categoría con todos sus instrumentos
Route::get('categories/{category}', 'CategoriesController@show')->name('category');

//Ruta para mostrar un instrument específico con sus detalles
Route::get('instruments/{instrument}', 'InstrumentsController@show');

//Ruta para ver los pedidos de un usuario
Route::get('user/orders', 'OrdersController@index')->name('orders')->middleware('auth');

//Ruta para ver un pedido concreto de un usuario
Route::get('user/orders/{order}', 'OrdersController@show')->middleware('auth');

//Ruta mostrar el perfil de usuario
Route::get('user/profile', 'UsersController@show')->name('userprofile');

//Ruta para mostrar la página de editar usuario
Route::get('user/edit', 'UsersController@edit');

//Ruta para editar (acción) un usuario
Route::post('user/edit', 'UsersController@update');

//Ruta para borrar un usuario
Route::get('user/delete/{id}', 'UsersController@destroy');

//Route::get('category/delete/{id}', 'CategoriesController@destroy');
Route::post('auth/register', 'UsersController@store');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Route::get('admin/index', 'UsersController@adminIndex')->middleware('admin');

//Declaramos la ruta para el recurso
//Route::resource('admin/instruments', 'InstrumentsController');

Route::prefix('admin')->middleware('admin')->group(function () {
    //Declaramos la ruta para el recurso (esto será parte del admin)
    Route::resource('instruments', 'InstrumentsController', ['except' => [
        'show'
    ]]);
});

//Route::get('admin/instruments', 'InstrumentsController@index')->middleware('admin');
//Route::get('admin/instruments/create', 'InstrumentsController@create')->middleware('admin');
//Route::post('admin/instruments/create', 'InstrumentsController@store')->middleware('admin');
//Route::get('admin/instruments/{id}', 'InstrumentsController@showForAdmin')->middleware('admin');
//Route::get('admin/instruments/edit/{id}', 'InstrumentsController@edit')->middleware('admin');
//Route::post('admin/instruments/edit/{id}', 'InstrumentsController@update')->middleware('admin');

//Declaramos la ruta para el recurso
//Route::resource('instruments', 'InstrumentsController');

Route::get('admin/categories', 'CategoriesController@indexForAdmin')->middleware('admin');
Route::get('admin/categories/create', 'CategoriesController@create')->middleware('admin');
Route::post('admin/categories/create', 'CategoriesController@store')->middleware('admin');
Route::get('admin/categories/edit/{id}', 'CategoriesController@edit')->middleware('admin');
Route::post('admin/categories/edit/{id}', 'CategoriesController@update')->middleware('admin');
Route::get('admin/categories/{id}', 'CategoriesController@showForAdmin')->middleware('admin');
Route::get('admin/categories/delete/{id}', 'CategoriesController@destroy')->middleware('admin');

Route::get('admin/users', 'UsersController@index')->middleware('admin');


Auth::routes();
//Ruta para mostrar la página home
Route::get('/home', 'HomeController@index')->name('home');
