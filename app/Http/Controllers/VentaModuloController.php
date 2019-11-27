<?php

namespace App\Http\Controllers;

use App\ventaModulo;
use Illuminate\Http\Request;

class VentaModuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Modulos.pruebaModulos');
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
     * @param  \App\ventaModulo  $ventaModulo
     * @return \Illuminate\Http\Response
     */
    public function show(ventaModulo $ventaModulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ventaModulo  $ventaModulo
     * @return \Illuminate\Http\Response
     */
    public function edit(ventaModulo $ventaModulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ventaModulo  $ventaModulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ventaModulo $ventaModulo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ventaModulo  $ventaModulo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ventaModulo $ventaModulo)
    {
        //
    }
}
