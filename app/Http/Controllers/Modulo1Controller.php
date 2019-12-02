<?php

namespace App\Http\Controllers;

use App\modulo1;
use App\CategoriaPlatillo;
use App\MenuPlatillo;
use Illuminate\Http\Request;

class Modulo1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $categorias = CategoriaPlatillo::where($request->categoria_id);
        // return $categorias;
        $categorias = CategoriaPlatillo::all();
        $menus = MenuPlatillo::all();
        return view('Modulos.ventaModulo',compact('categorias','menus'));
    }

      public function getMenu(Request $request, $id){

        if($request->ajax()){
            $menus = MenuPlatillo::menus($id);
            return response()->json($menus);
        }
    }

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\modulo1  $modulo1
     * @return \Illuminate\Http\Response
     */
    public function show(modulo1 $modulo1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\modulo1  $modulo1
     * @return \Illuminate\Http\Response
     */
    public function edit(modulo1 $modulo1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\modulo1  $modulo1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, modulo1 $modulo1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\modulo1  $modulo1
     * @return \Illuminate\Http\Response
     */
    public function destroy(modulo1 $modulo1)
    {
        //
    }
}
