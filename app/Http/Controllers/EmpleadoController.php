<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Municipio;
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
<<<<<<< HEAD
        return view ('Empleados.index', compact('empleados'));
=======
        return view("Empleados.index",compact("empleados"));
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD
        $municipios = Municipio::all();
        return view ('Empleados.add', compact('municipios'));    
=======
        return view("Empleados.alta");
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormEmpleado $request)
    {
<<<<<<< HEAD
        //return $request;

        $empleado = new Empleado($request->all());
        $empleado->save();
        
        return redirect('/empleado')->with('mesage', 'El empleado se ha agregado exitosamente!');

=======
         $empleado = new Empleado(request()->all());
         $empleado->save();


         return redirect()->route('empleado.index');
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
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
<<<<<<< HEAD
        $empleado = Empleado::findOrFail($id);
        $municipios = Municipio::all();
        return view('Empleados.edit', compact('empleado','municipios'));     
=======
        return  view("Empleados.edit",compact("empleado"));
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
<<<<<<< HEAD
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
=======
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
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
<<<<<<< HEAD
        $empleado = Empleado::find($id);
        $empleado->delete();

       return redirect('/empleado');
=======
        $empleado->delete();
        return redirect()->route('empleado.index');
>>>>>>> 36b7c66f6630c06ca7a8a324b431d80d8c9d7825
    }
}
