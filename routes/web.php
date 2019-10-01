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
    Route::resource('altamenu','MenuPlatillo@Create');
    Route::resource('guardarmenu','MenuPlatillo@store');
    Route::get('/eliminarplatillo/{id}','MenuPlatillo@eliminar');
    Route::get('/modificarplatillo/{id}','MenuPlatillo@edit');
    Route::POST('modificarplatillo','MenuPlatillo@updated')->name('modificarplatillo') ;
