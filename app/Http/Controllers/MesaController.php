<?php

namespace App\Http\Controllers;

use App\Mesa;
use App\Http\Requests\FormMesa;
use Illuminate\Http\Request;

class MesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mesas = Mesa::all();
        return view('mesas.index',compact('mesas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mesa $mesa)
    {
        return view('mesas.create',compact('mesa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormMesa $request)
    {
        Mesa::create([
            'numero_mesa' => $request['numero_mesa'],
            'descripcion_mesa' => $request['descripcion_mesa'],
        ]);
        return redirect()->route('mesas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function show(Mesa $mesa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mesa $mesa)
    {   
        return view('mesas.edit',compact('mesa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function update(FormMesa $request, Mesa $mesa)
    {
        $mesa->numero_mesa = $request['numero_mesa'];
        $mesa->descripcion_mesa = $request['descripcion_mesa'];
        $mesa->save();
        return redirect()->route('mesas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mesa  $mesa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mesa $mesa)
    {
        $mesa->delete();
        return redirect()->route('mesas.index');
    }

    public function menu(){
        // $mesas = Mesa::whereBetween('numero_mesa', [4, 6])->get();
        $mesas = Mesa::all();

        // dd($mesas);
        // Game::limit(30)->offset(30)->get();
        return view('sistema.menuMesas',compact('mesas'));
    }
}
