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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('proveedor', 'ProveedorController');
Route::get('/proveedor/{id}','ProveedorController@destroy');

Route::resource('producto', 'ProductoController');
Route::get('/producto/{id}','ProductoController@destroy');

Route::resource('categoria', 'CategoriaProductoController');
Route::get('/categoria/{id}','CategoriaController@destroy');
