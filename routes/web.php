<?php

Route::get('/', function () {
    return view('Arboleda.index');
})->name('arboleda.index');

// Route::get('/logueo', function () {
//     return view('Arboleda.Login');
// })->name('arboleda.login');

Route::get('/logueo','Auth\LoginController@showLoginForm')
->name('arboleda.login');
// ->middleware('guest');

Route::get('/registro', function () {
    return view('Arboleda.registro');
});


Route::get('/menu', function () {
    return view('Arboleda.menu');
});

Route::get('/specialties', function () {
    return view('Arboleda.specialties');
});

Route::get('/reservation', function () {
    return view('Arboleda.reservation');
});

Route::get('/blog', function () {
    return view('Arboleda.blog');
});

Route::get('/about', function () {
    return view('Arboleda.about');
});

Route::get('/contact', function () {
    return view('Arboleda.contact');
});


Route::get('/services', function () {
    return view('Arboleda.services');
});



Route::group(['middleware' => 'auth'], function () {

//-----------CRUD USUARIOS---------//
//--LISTAR
    Route::get('usuarios/','UserController@index')->name('users.index');
//--AGREGAR DATOS DEL USUARIO
    Route::get('usuarios/create', 'UserController@create')->name('users.create');
    Route::post('usuarios/alta','UserController@store')->name('users.store');
//--ELIMINAR
    Route::delete('/usuarios/eliminar/{user}','UserController@destroy')->name('users.destroy');
//--MODIFICAR
    Route::get('usuarios/{user}/editar','UserController@edit')->name('users.edit');
    Route::put('usuarios/{user}','UserController@update')->name('users.update');
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


    // Route::resource('proveedor', 'ProveedorController');
    // Route::get('/proveedor/{id}','ProveedorController@destroy');

    Route::resource('producto', 'ProductoController');
    Route::get('/producto/{id}','ProductoController@destroy');

    Route::resource('categoria', 'CategoriaProductoController');
    Route::get('/categoria/{id}','CategoriaController@destroy');

    Route::get('/admin', function(){
        return view('admin.dashboard');
    })->name('admin.index');
// ->middleware('auth');

});
	

Route::post('usuarios/alta/login','UserController@altaLogin')->name('users.altaLogin');//para la alta en la pagina presencial

Route::post('ingreso','Auth\LoginController@login')->name('ingreso');//iniciar sesion

Route::post('logout','Auth\LoginController@logout')->name('logout');
//salir de la sesion



// ----------CRUD EMPLEADO--------------//

Route::get('empleado/', 'EmpleadoController@index')->name('empleado.index');

Route::get('empleado/create','EmpleadoController@create')->name('empleado.create');

Route::post('empleado/alta','EmpleadoController@store')->name('empleado.alta');

Route::get("empleado/{empleado}",'EmpleadoController@edit')->name('empleado.edit');
Route::put('empleado/{empleado}/editar','EmpleadoController@update')->name('empleado.update');

Route::delete("empelado/{empleado}/delete",'EmpleadoController@destroy')->name('empleado.destroy');

///-----------------CRUD CATEGORIA PLATILLO---------------------/////

Route::get('categoriaPlatillo/', 'CategoriaPlatilloController@index')->name('categoriaPlatillo.index');

Route::get('categoriaPlatillo/create','CategoriaPlatilloController@create')->name('categoriaPlatillo.create');

Route::post('categoriaPlatillo/alta','CategoriaPlatilloController@store')->name('categoriaPlatillo.alta');

Route::get("categoriaPlatillo/{categoriaPlatillo}",'CategoriaPlatilloController@edit')->name('categoriaPlatillo.edit');

Route::PUT('categoriaPlatillo/{categoriaPlatillo}/editar','CategoriaPlatilloController@update')->name('categoriaPlatillo.update');

Route::delete("categoriaPlatillo/{categoriaPlatillo}/delete",'CategoriaPlatilloController@destroy')->name('categoriaPlatillo.destroy');


///-----------------CRUD MENU PLATILLO---------------------/////

Route::get('menuplatillo/', 'MenuPlatilloController@index')->name('menuplatillo.index');

Route::get('menuplatillo/create','MenuPlatilloController@create')->name('menuplatillo.create');
Route::POST('menuplatillo/alta','MenuPlatilloController@store')->name('menuplatillo.alta');

Route::get("menuplatillo/{menu_platillo}",'MenuPlatilloController@edit')->name('menuplatillo.edit');
Route::PUT('menuplatillo/{menu_platillo}/editar','MenuPlatilloController@update')->name('menuplatillo.update');

Route::delete("menuplatillo/{menu_platillo}/delete",'MenuPlatilloController@destroy')->name('menuplatillo.destroy');
