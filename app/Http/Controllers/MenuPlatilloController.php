<?php

namespace App\Http\Controllers;

use App\Http\Requests\menuplatillosRequest;
use App\MenuPlatillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MenuPlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menu_platillo=MenuPlatillo::All();
        return view('menuplatillos.index',compact('menu_platillo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menuplatillos.alta');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     MenuPlatillo::create([
            'nombre_platillo'=>$request['nombre_platillo'],
            'precio_platillo'=>$request['precio_platillo'],
            'descripcion_platillo'=>$request['descripcion_platillo'],
            'fecha'=>$request['fecha'],
            ]);

    return redirect('menuplatillo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu_platillo=\App\MenuPlatillo::find($id);
        return view('menuplatillos.edit',['menu_platillo'=>$menu_platillo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $a1)
    {

            $a1->id = $request['id'];
            $a1->nombre_platillo=$request['nombre_platillo'];
            $a1->precio_platillo=$request['precio_platillo'];
           $a1->descripcion_platillo=$request['descripcion_platillo'];
            $a1->fecha=$request['fecha'];
            $a1->save();
             return redirect('menuplatillo');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function eliminar($id)
    {
        DB::table('menu_platillos')->where('id','=',$id)->delete();
        return redirect("menuplatillo");
    }
}
