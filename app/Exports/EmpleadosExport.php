<?php

namespace App\Exports;

use App\Empleado;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;


class EmpleadosExport implements FromView
{

	USE Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Empleado::all();
    }


    public function __construct($criterio)
    {
        $this->criterio = $criterio;
    }

    public function view(): View {


         $empleados = Empleado::where('name', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('apellido_paterno', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('apellido_materno', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('telefono_empleado', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$this->criterio.'%')->get();

        return view('reportes.excelEmpleados',compact('empleados'),['criterio'=>$this->criterio]);
    	
    }

 
}
