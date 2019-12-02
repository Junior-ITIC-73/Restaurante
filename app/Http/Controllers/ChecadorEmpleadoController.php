<?php

namespace App\Http\Controllers;

use App\checadorEmpleado;
use App\Empleado;
use Illuminate\Http\Request;
use carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ChecadorEmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a1 = DB::SELECT("Select * from checador");
        $a2 = empleado::All();
        return view('checadorempleado.index')
        ->with('a1',$a1)
        ->with('a2',$a2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $a2 = empleado::All();
        return view('checadorempleado.create')->with('a2',$a2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date=carbon::now();
        $date1=$date->Format('Y-m-d h:i:s A');
        \App\checadorEmpleado::create([
            'empleado_id'=>($request['empleado_id']),
            'hora_entrada'=>$date1,
            ]);
            return redirect('checador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\checadorEmpleado  $checadorEmpleado
     * @return \Illuminate\Http\Response
     */
    public function show(checadorEmpleado $checadorEmpleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\checadorEmpleado  $checadorEmpleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*$salida = checadorEmpleado::find($id);
        return view('checadorempleado.edit',['salida'=>$salida]);*/
        $salida = checadorEmpleado::find($id);
        //dd($salida);

        return response()->json(
            $salida->toArray()
        );

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\checadorEmpleado  $checadorEmpleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $id = $request->id;
        $id_empleado = $request->id_emp;
        $date5=carbon::now();
        $date6=$date5->Format('Y-m-d h:i:s A');

        $checadorEmpleado = checadorEmpleado::FindorFail($id);
        //$checadorEmpleado->id = $request['id'];
        $checadorEmpleado->empleado_id = $id_empleado;
        $checadorEmpleado->hora_entrada= $request['hora_entrada'];
        $checadorEmpleado->hora_salida = $date6;
        $checadorEmpleado->update();
        return redirect('checador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\checadorEmpleado  $checadorEmpleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(checadorEmpleado $checadorEmpleado)
    {
        //
    }
}
