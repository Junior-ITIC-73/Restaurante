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
Route::POST('modificarplatillo','MenuPlatilloController@updated')->name('modificarplatillo') ;
