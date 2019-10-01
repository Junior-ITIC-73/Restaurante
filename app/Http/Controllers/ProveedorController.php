<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = Proveedor::all();
        return view('Proveedor/index',compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Proveedor.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor($request->all());
        $proveedor->save();
      
        return redirect('/proveedor')->with('mesage', 'El proveedor se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) //Proveedor $proveedor
    {
        $proveedor = Proveedor::findOrFail($id);
        return view('Proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id ) //Proveedor $proveedor
    {
        $proveedor = Proveedor::findorFail($id);
        $proveedor->razon_social = $request->razon_social;
        $proveedor->RFC = $request->RFC;
        $proveedor->telefono_proveedor = $request->telefono_proveedor;
        $proveedor->calle = $request->calle;
        $proveedor->num_interior = $request->num_interior;
        $proveedor->num_exterior = $request->num_exterior;
        $proveedor->CP = $request->CP;
        $proveedor->localidad = $request->localidad;

        $proveedor->save();
        return redirect('/proveedor')->with('mesage-update', 'El proveedor se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)// Proveedor $proveedor
    {
        $proveedor=Proveedor::find($id);
        $proveedor->delete();
        
        return redirect('/producto');
    }
}
