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
        $menu_platillo=\App\MenuPlatillo::All();
        return view('menuplatillos.index',compact('menu_platillo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function create()
    {
        return view('menuplatillos.alta');
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\MenuPlatillo::create([
            'nombre_platillo'=>($request['nombre_platillo']),
            'precio_platillo'=>($request['precio_platillo']),
            'descripcion_platillo'=>($request['descripcion_platillo']),
            'fecha'=>($request['fecha']),
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
    public function update(Request $request)
    {
            $id = $request['id'];
            $nombre_platillo=$request['nombre_platillo'];
            $precio_platillo=$request['precio_platillo'];
            $descripcion_platillo=$request['descripcion_platillo'];
            $fecha=$request['fecha'];
            DB::SELECT("CALL modifica_platillo('$nombre_platillo','$precio_platillo','$descripcion_platillo',
            '$fecha','$id')");
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
