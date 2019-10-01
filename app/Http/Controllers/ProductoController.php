<?php

namespace App\Http\Controllers;

use App\Producto;
use App\Proveedor;
use App\CategoriaProducto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return view('Producto/index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedores = Proveedor::all();
        $categorias = CategoriaProducto::all();
        return view('Producto.add',compact('proveedores','categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;
        $product = new Producto($request->all());
        $product->categoria_id = $request['categoria_id'];
        $product->proveedor_id = $request['proveedor_id'];
        $product->save();
        
        return redirect('/producto')->with('mesage', 'El producto se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $proveedores = Proveedor::all();
        $categorias = CategoriaProducto::all();
        return view('Producto.edit', compact('producto','proveedores','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id ) //Producto $producto
    {

        $producto = Producto::findorFail($id);
        $producto->nombre_producto = $request->nombre_producto;
        $producto->cantidad = $request->cantidad;
        $producto->costo = $request->costo;
        $producto->categoria_id = $request->categoria_id;
        $producto->proveedor_id = $request->proveedor_id;
        $producto->fecha_ingreso = $request->fecha_ingreso;
        $producto->activo = $request->activo;

        $producto->save();
        return redirect('/producto')->with('mesage-update', 'El producto se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)//Producto $producto
    {
        $producto=Producto::find($id);
        $producto->delete();
        
        return redirect('/producto');
    }
}
