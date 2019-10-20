<?php

namespace App\Http\Controllers;

use App\CategoriaProducto;
use Illuminate\Http\Request;

class CategoriaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias = CategoriaProducto::all();
        return view('CategoriaProducto/index',compact('categorias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CategoriaProducto.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new CategoriaProducto($request->all());
        $product->save();
        
        return redirect('/categoria')->with('mesage', 'La categoria se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaProducto $categoriaProducto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaProducto $categoriaProducto, $id)
    {
        $categoria = CategoriaProducto::findOrFail($id);
        return view('CategoriaProducto.edit', compact('categoria'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaProducto $categoriaProducto , $id)
    {
        $categoria = CategoriaProducto::findOrFail($id);
        $categoria->nombre_categoria = $request->nombre_categoria;
        
        $categoria->save();
        return redirect('/categoria')->with('mesage-update', 'La categoria se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaProducto  $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) //CategoriaProducto $categoriaProducto
    {
       $categoria = CategoriaProducto::find($id);
       $categoria->delete();

       return redirect('/categoria');
    }
}
