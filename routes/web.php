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


//-----------CRUD MESAS----------//
//--LISTAR
Route::get('mesas/','MesaController@index')->name('mesas.index');
//--CREAR
Route::get('mesas/create','MesaController@create')->name('mesas.create');
Route::post('mesas/alta','MesaController@store')->name('mesas.store');
//--ACTUALIZAR
Route::get('mesas/{mesa}/editar','MesaController@edit')->name('mesas.edit');
Route::put('mesas/{mesa}','MesaController@update')->name('mesas.update');
//---Eliminar
Route::get('mesas/elimiar/{mesa}','MesaController@destroy')->name('mesas.destroy');