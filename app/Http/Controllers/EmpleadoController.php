<?php

namespace App\Http\Controllers;

use App\Empleado;
use Illuminate\Http\Request;
use App\http\Requests\FormEmpleado;

//Para reportes en PDF
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

// para reportes Excel
use App\Exports\EmpleadosExport;
use Maatwebsite\Excel\Facades\Excel;

//para reporte Word
use phpoffice\phpword;
use Illuminate\support\Facades\DB;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $criterio = $request['criterio'];
        $empleados = Empleado::where('name', 'LIKE', '%'.$criterio.'%')
        ->orWhere('apellido_paterno', 'LIKE', '%'.$criterio.'%')
        ->orWhere('apellido_materno', 'LIKE', '%'.$criterio.'%')
        ->orWhere('telefono_empleado', 'LIKE', '%'.$criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$criterio.'%')
        ->paginate(2);

        return view("Empleados.index",compact("empleados"),['criterio'=>$criterio]);

        //Old
        // $empleados = Empleado::all();
        // return view("Empleados.index",compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Empleados.alta");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FormEmpleado $request)
    {
         $empleado = new Empleado(request()->all());
         $empleado->save();


         return redirect()->route('empleado.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        return  view("Empleados.edit",compact("empleado"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(FormEmpleado $request, Empleado $empleado)
    {
        $empleado->name = $request['name'];
        $empleado->apellido_paterno = $request['apellido_paterno'];
        $empleado->apellido_materno = $request['apellido_materno'];
        $empleado->sexo = $request['sexo'];
        $empleado->telefono_empleado = $request['telefono_empleado'];
        $empleado->calle = $request['calle'];
        $empleado->num_interior = $request['num_interior'];
        $empleado->num_exterior = $request['num_exterior'];
        $empleado->CP = $request['CP'];
        $empleado->localidad = $request['localidad'];
        $empleado->save();
        return redirect()->route('empleado.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleado.index');
    }

    public function reportepdf(Request $request){

        $criterio = $request['criterio'];
        $empleados = Empleado::where('name', 'LIKE', '%'.$criterio.'%')
        ->orWhere('apellido_paterno', 'LIKE', '%'.$criterio.'%')
        ->orWhere('apellido_materno', 'LIKE', '%'.$criterio.'%')
        ->orWhere('telefono_empleado', 'LIKE', '%'.$criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$criterio.'%')->get();
        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');


        $pdf = PDF::loadView("reportes.pdfEmpleado",compact("empleados","date"));


        return $pdf->stream('reporteEmpleados.pdf');
        // return $pdf->download('reportesEmpleados.pdf');

    }

    public function reporteExcel(Request $request){

        $criterio = $request['criterio'];


        return Excel::download(new EmpleadosExport($criterio),'Empleados-Reporte.xlsx');
    }


    public function reporteWord(){
                //creamos el objeto phpWord
        $phpWord = new \PhpOffice\PhpWord\PhpWord();


        $section = $phpWord->addSection();


       /* $description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim adminim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";*/

        $des ="Empleados";    
        $section->addText($des);
        $section->addImage("logo1.jpeg");
       // $section->addText($description);
        



        //en word debemos de crear una tabla desde 0 para los reportes

        $table = $section->addTable();
        //agregamos columna
        $table->addRow();
        //agregamos 3 encabezados (NOMBRE,PASSWORD Y CORREO)
        $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars("Nombre"),array('bold'=>true));
        $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars("Apelldio Paterno"),array('bold'=>true));
        $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars("Apellido Materno"),array('bold'=>true));
        //creacion de tabla
        /*for($r=1 ;$r<=8;$r++){
            $table->addRow();
            for($c=1;$c<=3;$c++){
                $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars("Row{$r},Cell{$c}"));
            }
        }*/
        $users=DB::SELECT("SELECT * FROM  empleados");

        for($r=0 ;$r<count($users);$r++){
            $table->addRow();
            
            $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars($users[$r]->name));
            $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars($users[$r]->apellido_paterno));
            $table->addCell(1750,array('borderSize'=>6))->addText(htmlspecialchars($users[$r]->apellido_materno));  
        }        

        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        try {
            $objWriter->save(storage_path('helloWorld.docx'));
        } catch (Exception $e) {
        }


        return response()->download(storage_path('helloWorld.docx'));




    }
}
