<?php

namespace App\Http\Controllers;

use App\Http\Requests\menuplatillosRequest;
use App\MenuPlatillo;
use App\CategoriaPlatillo;
use Illuminate\Http\Request;

//Para reportes en PDF
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

// para reportes Excel
use App\Exports\MenuPlatillosExport;
use Maatwebsite\Excel\Facades\Excel;


class MenuPlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $criterio  = $request['criterio'];
        $menu_platillos = MenuPlatillo::where('nombre_platillo', 'LIKE', '%'.$criterio.'%')->orWhere('descripcion_platillo', 'LIKE', '%'.$criterio.'%')->paginate(3);

        return view("menuplatillos.index",compact("menu_platillos"),['criterio'=>$criterio]);
        // Old
        // $menu_platillos=MenuPlatillo::All();
        // return view('menuplatillos.index',compact('menu_platillos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = CategoriaPlatillo::all();
        return view('menuplatillos.alta',compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(menuplatillosRequest $request)
    {
        $platillo  = new MenuPlatillo(request()->all());
        // return redirect()->route('menuplatillo.index');
        //valido si en el request se manda un archivo en el input llamado chooseFile
        $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
        //guardo el archivo en la carpeta imag con el nombre original del archivo
        $file->move('imag',$file->getClientOriginalName());

        $platillo->imagen = $file->getClientOriginalName();


        $platillo->save();
         return redirect()->route('menuplatillo.index');
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
    public function edit(MenuPlatillo $menu_platillo)
    {
         $categorias = CategoriaPlatillo::all();
       return view('menuplatillos.edit',compact('menu_platillo','categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function update(menuplatillosRequest $request,MenuPlatillo $menu_platillo)
    {
        //valido si en el request se manda un archivo en el input llamado chooseFile
       $file=$request->file('chooseFile');// chooseFile es el name que tiene mi input de tipo file
       //guardo el archivo en la carpeta imag con el nombre original del archivo
       $file->move('imag',$file->getClientOriginalName());


            $menu_platillo->categoria_id = $request['categoria_id'];
            $menu_platillo->nombre_platillo = $request['nombre_platillo'];
            $menu_platillo->precio_platillo = $request['precio_platillo'];
            $menu_platillo->descripcion_platillo = $request['descripcion_platillo'];
            $menu_platillo->imagen = $file->getClientOriginalName();
            $menu_platillo->save();


        return redirect()->route('menuplatillo.index');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MenuPlatillo  $menuPlatillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuPlatillo $menu_platillo)
    {
        $menu_platillo->delete();
         return redirect()->route('menuplatillo.index');
    }

    public function reportepdf(Request $request){
        $criterio  = $request['criterio'];
        $menu_platillos = MenuPlatillo::where('nombre_platillo', 'LIKE', '%'.$criterio.'%')->orWhere('descripcion_platillo', 'LIKE', '%'.$criterio.'%')->get();
        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');

         $pdf = PDF::loadView("reportes.pdfMenuPlatillo",compact("menu_platillos","date"));
        return $pdf->stream('reporteMenuPlatillos.pdf');
    }

    public function reporteExcel(Request $request){
        $criterio  = $request['criterio'];
        return Excel::download(new MenuPlatillosExport($criterio),'Platillos-Reporte.xlsx');
    }
}
