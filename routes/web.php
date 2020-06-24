<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes(['verify' => true]);

Route::get('/inicio', 'HomeController@index')->middleware('verified')->name('inicio');

Route::resource('users', 'UserController');

Route::resource('cargos', 'CargoController');

Route::group(['prefix' => 'inventario'], function () {
    Route::resource('categoriaProductos', 'CategoriaProductoController');
    Route::resource('productos', 'ProductoController');
});