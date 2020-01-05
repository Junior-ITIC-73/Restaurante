<?php

namespace App\Exports;

use App\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class UsersExport implements FromView
{
	USE Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function __construct($criterio)
    {
        $this->criterio = $criterio;
    }


    public function view(): View {


         $users = User::where('name', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('email', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('telefono_user', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('localidad', 'LIKE', '%'.$this->criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$this->criterio.'%')->get();
    	return view('reportes.excelUsuarios',compact('users'),['criterio'=>$this->criterio]);
    }
}
