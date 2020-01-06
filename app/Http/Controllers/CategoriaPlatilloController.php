<?php

namespace App\Http\Controllers;

use App\CategoriaPlatillo;
use Illuminate\Http\Request;

//Para reportes en PDF
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

// para reportes Excel
use App\Exports\CategoriaPlatillosExport;
use Maatwebsite\Excel\Facades\Excel;

//para reporte Word
use phpoffice\phpword;
use Illuminate\support\Facades\DB;

class CategoriaPlatilloController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $criterio = $request['criterio'];
        $categoriaPlatillos = CategoriaPlatillo::where('nombre_categoria', 'LIKE', '%'.$criterio.'%')
        ->paginate(5);

        // $users = User::All();
        return view('categoriaPlatillo.index',compact('categoriaPlatillos'),['criterio'=>$criterio]);
        ///Old
        //$categoriaPlatillos = CategoriaPlatillo::all();


        // dd($categoriaPlatillos);

        //return view('categoriaPlatillo.index',compact('categoriaPlatillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categoriaPlatillo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //valido si en el request se manda un archivo en el input llamado chooseFile
       $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
       //guardo el archivo en la carpeta imag con el nombre original del archivo
       $file->move('imag',$file->getClientOriginalName());

        CategoriaPlatillo::create([
        'nombre_categoria'=>($request['nombre_categoria']),
        //el el campo imagen de la bd guardo el nombre original del archivo
        'imagen'=>$file->getClientOriginalName()

        ]);
        
        return redirect()->route('categoriaPlatillo.index')->with('mesage', 'La categoria se ha agregado exitosamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function show(CategoriaPlatillo $categoriaPlatillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoriaPlatillo $categoriaPlatillo)
    {

       return view('categoriaPlatillo.edit',compact('categoriaPlatillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaPlatillo $categoriaPlatillo)
    {
        //valido si en el request se manda un archivo en el input llamado chooseFile
       $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
       //guardo el archivo en la carpeta imag con el nombre original del archivo
       $file->move('imag',$file->getClientOriginalName());
       $categoriaPlatillo->nombre_categoria = $request['nombre_categoria'];
       $categoriaPlatillo->imagen = $file->getClientOriginalName();
       $categoriaPlatillo->save();
        return redirect()->route('categoriaPlatillo.index')->with('mesage', 'La categoria se ha modificado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CategoriaPlatillo  $categoriaPlatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoriaPlatillo $categoriaPlatillo)
    {
        $categoriaPlatillo->delete();
        return redirect()->route('categoriaPlatillo.index')->with('message', 'La categoria se ha eliminado exitosamente!');

    }
     public function reportepdf(Request $request){


        $criterio = $request['criterio'];




        $categoriaPlatillos = CategoriaPlatillo::where('nombre_categoria', 'LIKE', '%'.$criterio.'%')->get();


        $date = Carbon::now(); 


        $date = $date->format('Y-m-d');


        $pdf = PDF::loadView("reportes.pdfCategoriaPlatillo",compact("categoriaPlatillos","date"));

        return $pdf->stream('ReporteCategoriPlatillos.pdf');
      

    }

    public function reporteExcel(Request $request){

        $criterio = $request['criterio'];
        return Excel::download(new CategoriaPlatillosExport($criterio),'CategoriaPlatillos-Reporte.xlsx');
        // return Excel::download(new UsersExport,'Usuario-Reporte.xlsx');
    }
}
