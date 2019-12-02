<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use Carbon\Carbon;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $num_corte = 1;
       $saldo_inicial=2500;
       $monto_cobrado = Venta::sum('total_venta');
       $total_efectivo= Venta::where('tipo_de_pago','0')->sum('total_venta');
       $total_tarjeta= Venta::where('tipo_de_pago','1')->sum('total_venta');
       $date = Carbon::now(); 
       $date = $date->format('Y-m-d');     
       return view('Modulos.corte',compact('date','num_corte','saldo_inicial','monto_cobrado','total_efectivo','total_tarjeta'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function detalleVentas()
    {
        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');    
        $ventas = Venta::all()->where('tipo_de_pago','0');
        return view("Modulos.detallesVentasEfectivo",compact('ventas','date'));
    }
    public function reporte(Request $request){

       $num_corte = $request['num_corte'];
       $fecha_corte = $request['fecha_corte'];
       $saldo_inicial = $request['saldo_inicial'];
       $total_diferencia = $request['total_diferencia'];
       $monto_cobrado = $request['monto_cobrado'];
       $total_en_caja = $request['total_en_caja'];

       $total_efectivo = $request['total_efectivo'];
       $cantidad_efectivo = $request['cantidad_efectivo'];
       $diferencia_efectivo = $request['diferencia_efectivo'];

       $total_tarjeta = $request['total_tarjeta'];
       $cantidad_tarjeta = $request['cantidad_tarjeta'];
       $diferencia_tarjeta = $request['diferencia_tarjeta'];

       return view('reportes.cortePDF',compact('num_corte','fecha_corte','saldo_inicial','total_diferencia','monto_cobrado','total_en_caja','total_efectivo','cantidad_efectivo','diferencia_efectivo','total_tarjeta','cantidad_tarjeta','diferencia_tarjeta'));
    }
}
