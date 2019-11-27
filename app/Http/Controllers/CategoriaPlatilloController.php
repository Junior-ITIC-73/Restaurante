<?php

namespace App\Http\Controllers;

use App\CategoriaPlatillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CategoriaPlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a1=CategoriaPlatillo::All();
        return view('catplatillo.index',compact('a1'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('catplatillo.alta');
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
        return redirect('catplatillo');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaPlatillo $categoriaPlatillo)
    {
        //
    }
    public function eliminar($id)
    {
        DB::table('categoria_platillos')->where('id','=',$id)->delete();
        return redirect("catplatillo");
    }
}
