<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Municipio;
use Illuminate\Http\Request;

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
        return view ('Empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipios = Municipio::all();
        return view ('Empleados.add', compact('municipios'));    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $empleado = new Empleado($request->all());
        $empleado->save();
        
        return redirect('/empleado')->with('mesage', 'El empleado se ha agregado exitosamente!');

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
    public function edit(Empleado $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $municipios = Municipio::all();
        return view('Empleados.edit', compact('empleado','municipios'));     
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleado = Empleado::findOrFail($id);
        $empleado->name = $request->name;
        $empleado->sexo = $request->sexo;
        $empleado->telefono_empleado = $request->telefono_empleado;
        $empleado->calle = $request->calle;
        $empleado->num_interior = $request->num_interior;
        $empleado->num_exterior = $request->num_exterior;
        $empleado->CP = $request->CP;
        $empleado->localidad = $request->localidad;
        $empleado->municipio_id = $request->municipio_id;

        $empleado->save();
        return redirect('/empleado')->with('mesage-update', 'El empleado se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        $empleado->delete();

       return redirect('/empleado');
    }
}
