<?php

namespace App\Exports;

use App\MenuPlatillo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class MenuPlatillosExport implements FromView
{
	USE Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return MenuPlatillo::all();
    }

    public function __construct($criterio)
    {
        $this->criterio = $criterio;
    }


    public function view(): View {

        $menu_platillos = MenuPlatillo::where('nombre_platillo', 'LIKE', '%'.$this->criterio.'%')->orWhere('descripcion_platillo', 'LIKE', '%'.$this->criterio.'%')->get();

    	return view('reportes.excelMenuPlatillo',compact('menu_platillos'),['criterio'=>$this->criterio]);
    }
}
