<?php
    // ----RUTAS DE LA PINA PRESENCIAL

    Route::get('/', function () {
        return view('Arboleda.index');
    })->name('arboleda.index');


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


    Route::get('/test', function () {
        return view('Arboleda.test');
    })->name('test');


    Route::post('/contactanos','EmailController@contactanos')->name('contactanos');


    Route::GET('logout', 'Auth\LoginController@logout')->name('logout');
    
    //------final de rutas de pagina presencial 




    //-----------------PARA EL LOGIN--------------////
    Route::group(['middleware' => 'guest'], function () {

    Route::get('/registro', function () {
        return view('Arboleda.registro');
    });

    Route::get('/restablecer', function () {
        return view('Arboleda.emailResetPassword');
    })->name('restablecer');


    // Registro de usuarios
    Route::post('register', 'Auth\RegisterController@register')->name('users.altaLogin');;


    // Ingreso al sistema...
    Route::get('/logueo', function () {
        return view('Arboleda.Login');
    })->name('login');
    // ->middleware('guest');

    // // Salir del sistema...
    // Route::get('/logout', function () {
    // Auth::logout();
    // return redirect('/');})->name('logout'); 

    //logueo al sistema
    Route::post('logueoLaravel', 'Auth\LoginController@login')->name('logueoLaravel');



    // Password Reset 
    //enviar mail (link) para reestablecer contraseña
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    //ruta con link en el email y vista para reemplazar la contraseña
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    //reset de contraseña
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


    // Email Verification Routes...
    Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    Route::get('email/verify/{id}', 'Auth\VerificationController@verify')->name('verification.verify');
    Route::get('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');


    });

     


    //-----------------RUTAS DEL SISTEMA----------------------------
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



    // ----------CRUD EMPLEADO--------------//
        Route::get('empleado/', 'EmpleadoController@index')->name('empleado.index');
        Route::get('empleado/create','EmpleadoController@create')->name('empleado.create');
        Route::post('empleado/alta','EmpleadoController@store')->name('empleado.alta');
        Route::get("empleado/{empleado}",'EmpleadoController@edit')->name('empleado.edit');
        Route::put('empleado/{empleado}/editar','EmpleadoController@update')->name('empleado.update');
        Route::delete("empelado/{empleado}/delete",'EmpleadoController@destroy')->name('empleado.destroy');

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

    ////----------------------RUTAS PARA  EL MENU DE MESAS DISPONIBLES-------//
        Route::get('orden/menumesas','MesaController@menu')->name('sistema.menumesas');
        Route::get('sistema/carrito/{mesa}','OrdenController@index')->name('sistema.carrito');
        Route::post('sistema/realizarorden/{mesa}','OrdenController@ordenar')->name('realizar.orden');
        Route::post('sistema/terminar/{mesa}','OrdenController@terminar')->name('terminar.orden');

    // ---------------------MODULO DE CORTE----------------------------------//

        Route::get("detalleVentasEfectivo","CorteController@detallesVentasEfectivo")->name('modulo.detalleVentasEfectivo');

        Route::get("detalleVentasTarjeta","CorteController@detalleVentasTarjeta")->name('modulo.detalleVentasTarjeta');

        Route::get("corteCaja","CorteController@index")->name('modulo.corteCaja');

        Route::post("reporte/corteCaja",'CorteController@reporte')->name('reporte.corte');


    Route::get('/home','HomeController@index')->name('home');


});

    //////////////CRUD Orden
    Route::resource('orden', 'OrdenController');

    //Index del modulo de ventas
    Route::resource('realizarventa', 'Modulo1controller');
    //Route::POST('agregarventa', 'Modulo1controller@store');
    //Recursos anidados para la vista venta.blade.php
    Route::get('menus/{id}', 'Modulo1Controller@getMenu');
    //Recursos para agregar productos a la vista venta.blade.php
    Route::get('menusadd/{id}', 'Modulo1Controller@getContenido');
    //Recursos anidados para optener os precios de los productos
    Route::get('cantidad/{id}', 'Modulo1Controller@getCantidad');
    //Ajax en clase
    //Route::name('/ajax1')->get('/ajax1','Modulo1controller@ajaxGrupos');
    Route::get('pdf', function(){
        $users = App\User::all();
        $pdf = PDF::loadView('pruebaPDF',['users'=>$users]);
        return $pdf->stream('archivo.pdf');
    }
    );
    Route::get('menusprice/{id}', 'Modulo1Controller@getContenido2');

    // Route::get('venta','ChidoController@index');
    // Route::POST('ventas','ChidoController@store');
    ///////////////////////////////////
    
    Route::post('busqueda/categoriaplatillo','CategoriaPlatilloController@index')->name('busqueda.categoriaplatillo');


    //Reportes de Categoria Platillo
    Route::get('categoriaplatillo/reportepdf/{criterio?}','CategoriaPlatilloController@reportepdf')->name('pdf.categoriaplatillo');


    Route::get('categoriaplatillo/reporteExcel/{criterio?}','CategoriaPlatilloController@reporteExcel')->name('excel.categoriaplatillo');

    // //     //-buqueda por citerio empleados
    // // Route::post('busqueda/empleado','EmpleadoController@index')->name('busqueda.empleado');
    // // //Reportes de Empleados
    // // Route::get('Empleados/reportepdf/{criterio?}','EmpleadoController@reportepdf')->name('pdf.empleado');

    // Route::get('Empleados/reporteExcel/{criterio?}','EmpleadoController@reporteExcel')->name('excel.empleado');

        //-buqueda por citerio menu Platillos
    Route::post('busqueda/menu_platillo','MenuPlatilloController@index')->name('busqueda.menu_platillo');

    //Reportes de  PDF menu Platillos
    Route::get('menu_platillo/reportepdf/{criterio?}','MenuPlatilloController@reportepdf')->name('pdf.menu_platillo');
    //reporte de Excel  menu Platillos
    Route::get('menu_platillo/reporteExcel/{criterio?}','MenuPlatilloController@reporteExcel')->name('excel.menu_platillo');

        //-buqueda por citerio empleados
    Route::post('busqueda/usuario','UserController@index')->name('busqueda.usuario');
    //Reportes de Usuarios
    Route::get('usuarios/reportepdf/{criterio?}','UserController@reportepdf')->name('pdf.usuario');
    Route::get('usuarios/reporteExcel/{criterio?}','UserController@reporteExcel')->name('excel.usuario');
    // Route::get('usuarios/reporteWord/','UserController@reporteWord')->name('word.usuario');

    // //-buqueda por citerio empleados
    // Route::post('busqueda/empleado','EmpleadoController@index')->name('busqueda.empleado');
    // //Reportes de Empleados
    // Route::get('Empleados/reportepdf/{sexo?}/{criterio?}','EmpleadoController@reportepdf')->name('pdf.empleado');

    //-buqueda por citerio empleados
    Route::post('busqueda/empleado','EmpleadoController@index')->name('busqueda.empleado');
    //Reportes de Empleados
    Route::get('Empleados/reportepdf/{sexo?}/{criterio?}','EmpleadoController@reportepdf')->name('pdf.empleado');

    Route::get('Empleados/reporteExcel/{criterio?}','EmpleadoController@reporteExcel')->name('excel.empleado');
    // Route::get('Empleados/reporteWord/','EmpleadoController@reporteWord')->name('word.empleado');
    //Route::get('/extra','ExtraController');