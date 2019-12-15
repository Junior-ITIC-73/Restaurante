<?php

namespace App\Http\Controllers;

use App\CategoriaPlatillo;
use Illuminate\Http\Request;

class CategoriaPlatilloController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaPlatillos = CategoriaPlatillo::all();


        // dd($categoriaPlatillos);

        return view('categoriaPlatillo.index',compact('categoriaPlatillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoriaPlatillo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //valido si en el request se manda un archivo en el input llamado chooseFile
       $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
       //guardo el archivo en la carpeta imag con el nombre original del archivo
       $file->move('imag',$file->getClientOriginalName());

        CategoriaPlatillo::create([
        'nombre_categoria'=>($request['nombre_categoria']),
        //el el campo imagen de la bd guardo el nombre original del archivo
        'imagen'=>$file->getClientOriginalName()


        ]);
        return redirect()->route('categoriaPlatillo.index')->with('mesage', 'La categoria se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaPlatillo $categoriaPlatillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaPlatillo $categoriaPlatillo)
    {

       return view('categoriaPlatillo.edit',compact('categoriaPlatillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaPlatillo $categoriaPlatillo)
    {
        //valido si en el request se manda un archivo en el input llamado chooseFile
       $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
       //guardo el archivo en la carpeta imag con el nombre original del archivo
       $file->move('imag',$file->getClientOriginalName());
       $categoriaPlatillo->nombre_categoria = $request['nombre_categoria'];
       $categoriaPlatillo->imagen = $file->getClientOriginalName();
       $categoriaPlatillo->save();
        return redirect()->route('categoriaPlatillo.index')->with('mesage', 'La categoria se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaPlatillo $categoriaPlatillo)
    {
        $categoriaPlatillo->delete();
        return redirect()->route('categoriaPlatillo.index')->with('message', 'La categoria se ha eliminado exitosamente!');

    }
}
