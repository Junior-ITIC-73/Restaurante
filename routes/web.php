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



Route::resource('menuplatillo','MenuPlatilloController');
Route::post('alta_menu','MenuPlatilloController@store')->name('alta_menu');
Route::get('/eliminarplatillo/{id}','MenuPlatilloController@eliminar');
Route::get('/modificarplatillo/{id}','MenuPlatilloController@edit');
Route::POST('modificarplatillo','MenuPlatilloController@update')->name('modificarplatillo') ;


Route::resource('catplatillo','CategoriaPlatilloController');
Route::post('alta_catplatillo','CategoriaPlatilloController@store')->name('alta_catplatillo');
Route::get('/eliminar_catplatillo/{id}','CategoriaPlatilloController@eliminar');





Route::resource('proveedor', 'ProveedorController');
Route::get('/proveedor/{id}','ProveedorController@destroy');

Route::resource('producto', 'ProductoController');
Route::get('/producto/{id}','ProductoController@destroy');

Route::resource('categoria', 'CategoriaProductoController');
Route::get('/categoria/{id}','CategoriaController@destroy');
