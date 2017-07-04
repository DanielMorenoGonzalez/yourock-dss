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

//Ruta para ver los pedidos de un usuario
Route::get('user/orders', 'OrdersController@index')->name('orders')->middleware('auth');

//Ruta para ver un pedido concreto de un usuario
Route::get('user/orders/{order}', 'OrdersController@show')->middleware('auth');

Route::post('auth/register', 'UsersController@store');
Route::post('auth/login', 'Auth\LoginController@login');
Route::get('auth/logout', 'Auth\LoginController@logout');

Route::prefix('user')->group(function () {
    //Ruta para mostrar la página de editar usuario con el que hemos iniciado sesión
    Route::get('edit', 'UsersController@edit');
    //Ruta para editar (acción) el perfil de usuario con el que hemos iniciado sesión
    Route::post('edit', 'UsersController@update');
    //Ruta mostrar el perfil de usuario con el que hemos iniciado sesión
    Route::get('profile', 'UsersController@show')->name('userprofile');
    //Ruta borrar el usuario (cliente) con el que hemos iniciado sesión
    Route::delete('delete', 'UsersController@destroy');
});

//Ruta para mostrar un instrument específico con sus detalles
Route::get('instruments/{instrument}', 'InstrumentsController@show');

//Ruta para mostrar todas las categorías (con algunos de sus instrumentos)
Route::get('categories', 'CategoriesController@index')->name('categories');

//Ruta para mostrar una categoría con todos sus instrumentos
Route::get('categories/{category}', 'CategoriesController@show')->name('category');

//Declaramos la ruta para el admin (con su prefijo y middleware adecuados) 
Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('index', 'UsersController@adminIndex');
    //Declaramos la ruta para el recurso instruments
    Route::resource('instruments', 'InstrumentsController', ['except' => [
        'show'
    ]]);
    Route::get('instruments/{id}', 'InstrumentsController@showDetails');
    //Declaramos la ruta para el recurso categories
    Route::resource('categories', 'CategoriesController', ['except' => [
        'index', 'show'
    ]]);
    Route::get('categories', 'CategoriesController@indexCategories');
    Route::get('categories/{id}', 'CategoriesController@showDetails');
    Route::resource('users', 'UsersController', ['only' => [
        'index'
    ]]);
    Route::get('users/customers/create', 'UsersController@createCustomer');
    Route::post('users/customers/create', 'UsersController@storeCustomer');
    Route::get('users/admins/create', 'UsersController@createAdmin');
    Route::post('users/admins/create', 'UsersController@storeAdmin');
    Route::get('users/{id}', 'UsersController@showUser');
    Route::get('users/edit/{id}', 'UsersController@editUser');
    Route::put('users/edit/{id}', 'UsersController@updateUser');
    Route::delete('users/{id}', 'UsersController@destroyUser');
});

Auth::routes();
//Ruta para mostrar la página home
Route::get('/home', 'HomeController@index')->name('home');
