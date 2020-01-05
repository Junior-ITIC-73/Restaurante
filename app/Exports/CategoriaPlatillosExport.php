<?php

namespace App\Exports;

use App\CategoriaPlatillo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class CategoriaPlatillosExport implements FromView
{
	USE Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return CategoriaPlatillo::all();
    }

    public function __construct($criterio){
        $this->criterio = $criterio;
    }
    public function view(): View {

         $categoriaplatillos = CategoriaPlatillo::where('nombre_categoria', 'LIKE', '%'.$this->criterio.'%')->get();
    	return view('reportes.excelCategoriaPlatillos',compact('categoriaplatillos'),['criterio'=>$this->criterio]);
    }
}
