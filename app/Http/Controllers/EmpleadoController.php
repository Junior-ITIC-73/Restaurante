<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\http\Requests\FormEmpleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return view("Empleados.index",compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Empleados.alta");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormEmpleado $request)
    {
         $empleado = new Empleado(request()->all());
         $empleado->save();


         return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return  view("Empleados.edit",compact("empleado"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(FormEmpleado $request, Empleado $empleado)
    {
        $empleado->name = $request['name'];
        $empleado->apellido_paterno = $request['apellido_paterno'];
        $empleado->apellido_materno = $request['apellido_materno'];
        $empleado->sexo = $request['sexo'];
        $empleado->telefono_empleado = $request['telefono_empleado'];
        $empleado->calle = $request['calle'];
        $empleado->num_interior = $request['num_interior'];
        $empleado->num_exterior = $request['num_exterior'];
        $empleado->CP = $request['CP'];
        $empleado->localidad = $request['localidad'];
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();

        return redirect()->route('empleado.index');
    }
}
