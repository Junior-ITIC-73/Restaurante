<?php

namespace App\Http\Controllers;

use App\User;
use App\Auth;
use App\modulo1;
use App\CategoriaPlatillo;
use App\MenuPlatillo;
use App\Empleado;
use App\Mesa;
use App\Orden;
use App\Venta;
use Illuminate\Http\Request;

class Modulo1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)//Request $request)
    {   
        // FUNCIONES DE AJAX
        // $users = User::all();
        // $categorias = CategoriaPlatillo::all();
        // $menus = MenuPlatillo::all();
        // $id = $request->categoria_id;
        // $mennus = MenuPlatillo::where('categoria_id','=',$id)->get(); 
        // return view('Modulos.ventaModulo',compact('categorias','menus','users','mennus')); 
        //return $request->all(); 
        //venta.blade.php
         $categorias = CategoriaPlatillo::all();
         $ventas = Venta::all();
        // //return $categorias;
        // $menus = MenuPlatillo::all();
        // $empleados = Empleado::all();
        // $mesas = Mesa::all();
        // $usuarios = User::all();
        // $ordenes= Orden::all();
        //return($mesas);
        //return $menus;
        //return $menus;
        //$id = $request->id;
        //$menus = MenuPlatillo::where('categoria_id','=',$id)->get();

        //return view('Modulos.venta',compact('categorias','empleados','mesas','usuarios','ordenes'));
        //return view('Modulos.semaforo');
        //return view('Modulos.carrito',compact('categorias','empleados'));

        if ($request)
        {
            //trim() Elimina espacios en blanco al principio y al final
            $query = trim($request->input('searchText'));

            $ventas = Venta::where('folio_venta', 'LIKE', "%$query%")
                ->paginate(5);

            return view('Modulos.carroventas', [
                'ventas'=>$ventas, 
                'searchText'=>$query
            ]);
        }
                //return view('Modulos.carroventas',compact('ventas'));

    }


    // FUNCION PARA OBTENER LOS RESULTADOS CON LA PETICION AJAX 

      public function getMenu(Request $request, $id){

        if($request->ajax()){
            $menus = MenuPlatillo::where('categoria_id','=',$id)->get();
            return response()->json($menus);
        }
    }

        public function getContenido(Request $request, $id){
            $data = MenuPlatillo::where('id',"=",$id)->get();
            return response()->json($data);
        }

    //     public function getCantidad(Request $request, $id){
    //     if($request->ajax()){
    //         $datas = MenuPlatillo::where('id',"=",$id)->get();
    //         foreach ($datas as $data) {
    //             $datashelp[$data->id]=$data->precio_platillo;
    //         }
    //         return response()->json($datashelp);
    //     }
    //   }

        public function getContenido2(Request $request, $id){
            if($request->ajax()){
                $datas = MenuPlatillo::where('id',"=",$id)->get();
                    foreach ($datas as $data) {
                            $price[$data->id]=$data->precio_platillo;
                         }
                         return response()->json($price);
                     }
        }


      // public function ajaxGrupos(Request $request){
      //   if($request->ajax()){
      //       $categorias = MenuPlatillo::where('categoria_id',$request->id)->get();
      //       foreach ($categorias as $categoria) {
      //           $categoriashelp[$categoria->id]=$categoria->nombre_platillo;
      //       }
      //       return response()->json($categoriashelp);
      //   }
      // }  

    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = MenuPlatillo::all();
        $empleados = User::all();
        $orders = Orden::all();
        $mesas = Mesa::all();
        return view('Modulos.add',compact('menus','empleados','orders','mesas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        // $cantidad = $request->cantidad;
        // //return $total;
        // foreach ($cantidad as $cant) {
        //     $cant;
        // }
        $pro=0;
        $precio = $request->precio_venta;
        foreach ($precio as $pre) {
            $pro= $pre+$pro;
        }

        $ordens= Orden::create([
            'user_id' => $request['user_id'],
            'mesa_id' => $request['mesa_id'],
            'folio_orden' => $request['folio_orden'],
            'total_orden' => $pro,
        ]);
        //return $request->all();
        // $orden = new Orden($request->all());
        // $orden->user_id = $request['user_id'];
        // $orden->mesa_id = $request['mesa_id'];
        // $orden->save();
        // dd($orden);
        return redirect('/realizarventa');
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
