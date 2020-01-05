<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Venta;
use Carbon\Carbon;
use Barryvdh\DomPDF\Facade as PDF;

class CorteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //obtengo fecha de zona horaria mexico
       $date = Carbon::now(); 
       $date = $date->format('Y-m-d');//asigno formato  

       $num_corte = 1;
       $saldo_inicial=1000;//todo los dias dejan 1000 pesos
       $monto_cobrado = Venta::whereDate('created_at',$date)->sum('total_venta');//consulta para sumar ventas totales donde la fecha sea la de hoy
       $total_efectivo= Venta::where('tipo_de_pago','0')->whereDate('created_at',$date)->sum('total_venta');//consulta para traer  suma  en donde el pago fue en efectivio
       $total_tarjeta= Venta::where('tipo_de_pago','1')->whereDate('created_at',$date)->sum('total_venta');//consulta para traer  suma  en donde el pago fue en tarjeta
// =======
//        $monto_cobrado = 1100;//Venta::whereDate('created_at',$date)->sum('total_venta');//consulta para sumar ventas totales donde la fecha sea la de hoy
//        $total_efectivo= 800;//Venta::where('tipo_de_pago','0')->whereDate('created_at',$date)->sum('total_venta');//consulta para traer  suma  en donde el pago fue en efectivio
//        $total_tarjeta= 300;//Venta::where('tipo_de_pago','1')->whereDate('created_at',$date)->sum('total_venta');//consulta para traer  suma  en donde el pago fue en tarjeta
// >>>>>>> 602e3543ad2ec92a4bcd8c033dbc85dc26eeb1d0
       return view('Modulos.corte.corte',compact('date','num_corte','saldo_inicial','monto_cobrado','total_efectivo','total_tarjeta'));//le mando todas las consultas
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
    public function detallesVentasEfectivo()
    {
        
        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');    
        //consulta  mis ventas del dia de hoy donde las ventas sean en EFECTIVO
        $ventas = Venta::where('tipo_de_pago','0')->whereDate('created_at',$date)->get();
        
        return view("Modulos.corte.detallesVentasEfectivo",compact('ventas','date'));


    }
    public function detalleVentasTarjeta()
    {
        
        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');    
        //consulta  mis ventas del dia de hoy donde las ventas sean en de TARJETA
        $ventas = Venta::where('tipo_de_pago','1')->whereDate('created_at',$date)->get();
        
        return view("Modulos.corte.detallesVentasTarjeta",compact('ventas','date'));

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

       $suma = ($cantidad_efectivo + $cantidad_tarjeta);


       //CREACION DE REPORTE PDF
        $pdf = PDF::loadView('reportes.cortePDF',compact('num_corte','fecha_corte','saldo_inicial','total_diferencia','monto_cobrado','total_en_caja','total_efectivo','cantidad_efectivo','diferencia_efectivo','total_tarjeta','cantidad_tarjeta','diferencia_tarjeta','suma'));

        return $pdf->stream();
    }
}
