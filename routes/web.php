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
    return view('Arboleda.index');
});

Route::get('/contacto', function () {
    return view('Arboleda.contacto');
});
Route::get('/about', function () {
    return view('Arboleda.about');
});
Route::get('/reservacion', function () {
    return view('Arboleda.reservation');
});
Route::get('/especial', function () {
    return view('Arboleda.special-dishes');
});
Route::get('/menu', function () {
    return view('Arboleda.menu');
});
Route::get('/logueo', function () {
    return view('Arboleda.login');
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
Auth::routes();

//-----------CRUD USUARIOS---------//
//--LISTAR
Route::get('usuarios/','UserController@index')->name('users.index');
//--AGREGAR DATOS DEL USUARIO
Route::get('usuarios/create', 'UserController@create')->name('users.create');
Route::post('usuarios/alta','UserController@store')->name('users.store');
//--ELIMINAR
Route::get('/usuarios/eliminar/{user}','UserController@destroy')->name('users.destroy');
//--MODIFICAR
Route::get('usuarios/{user}/editar','UserController@edit')->name('users.edit');
Route::put('usuarios/{user}','UserController@update')->name('users.update');

//-----------CRUD PEDIDO----------//
//--LISTAR
Route::get('pedidos/','PedidoController@index')->name('pedidos.index');
//--CREAR
Route::get('pedidos/create','PedidoController@create')->name('pedidos.create');
Route::post('pedidos/alta','PedidoController@store')->name('pedidos.store');
//--ACTUALIZAR
Route::get('pedidos/{pedido}/editar','PedidoController@edit')->name('pedidos.edit');
Route::put('pedidos/{pedido}','PedidoController@update')->name('pedidos.update');
//---Eliminar
Route::get('pedidos/elimiar/{pedido}','PedidoController@destroy')->name('pedidos.destroy');
Auth::routes();

Route::resource('menuplatillo','MenuPlatilloController');
Route::post('alta_menu','MenuPlatilloController@store')->name('alta_menu');
Route::get('/eliminarplatillo/{id}','MenuPlatilloController@eliminar');
Route::get('/modificarplatillo/{id}','MenuPlatilloController@edit');
Route::POST('modificarplatillo','MenuPlatilloController@update')->name('modificarplatillo') ;

Route::resource('proveedor', 'ProveedorController');
Route::get('/proveedor/{id}','ProveedorController@destroy');

Route::resource('producto', 'ProductoController');
Route::get('/producto/{id}','ProductoController@destroy');

Route::resource('categoria', 'CategoriaProductoController');
Route::get('/categoria/{id}','CategoriaController@destroy');

Route::get('/admin', function(){
    return view('admin.dashboard');
});