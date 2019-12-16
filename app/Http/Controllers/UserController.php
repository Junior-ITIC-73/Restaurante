<?php

namespace App\Http\Controllers;

use App\User;
use App\http\Requests\FormUser;
use App\http\Requests\FormUserEdit;
use Illuminate\Http\Request;

//Para reportes en PDF
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;

// para reportes Excel
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

//para reporte Word
use phpoffice\phpword;
use Illuminate\support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $criterio = $request['criterio'];
        $users = User::where('name', 'LIKE', '%'.$criterio.'%')
        ->orWhere('email', 'LIKE', '%'.$criterio.'%')
        ->orWhere('telefono_user', 'LIKE', '%'.$criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$criterio.'%')
        ->orWhere('localidad', 'LIKE', '%'.$criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$criterio.'%')
        ->paginate(10);

        return view('users.index',compact('users'),['criterio'=>$criterio]);

        // $users = User::All();
        // return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function altaLogin(Request $request){

        $request->validate([
               'name'=>'required|not_regex:/[0-9]/',
               'email' => 'required|email|unique:users',
               'password' => 'required|min:6|confirmed', 
               'password_confirmation' =>'required|min:6|same:password',
        ]);

        $user = New User(request()->all());
        $user->password = bcrypt($user->password);
        $user->save();

        return redirect()->route('arboleda.login');

    }
    public function store(FormUser $request)
    {
       $prueba= User::create([
            'name' => $request['name'],
            'sexo' => $request['sexo'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'telefono_user' => $request['telefono_user'],
            'calle' => $request['calle'],
            'num_interior' => $request['num_interior'],
            'num_exterior' => $request['num_exterior'],
            'CP' => $request['CP'],
            'localidad' => $request['localidad']
        ]);

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(FormUserEdit $request, User $user)
    {
        $user->name = $request['name'];
        $user->sexo = $request['sexo'];
        $user->calle = $request['calle'];
        $user->telefono_user = $request['telefono_user'];
        $user->num_interior = $request['num_interior'];
        $user->num_exterior = $request['num_exterior'];
        $user->CP= $request['CP'];
        $user->localidad= $request['localidad'];
        $user->save();

        return redirect()->route('users.index');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }

    public function reportepdf(Request $request){


        $criterio = $request['criterio'];

        $users = User::where('name', 'LIKE', '%'.$criterio.'%')
        ->orWhere('email', 'LIKE', '%'.$criterio.'%')
        ->orWhere('telefono_user', 'LIKE', '%'.$criterio.'%')
        ->orWhere('calle', 'LIKE', '%'.$criterio.'%')
        ->orWhere('localidad', 'LIKE', '%'.$criterio.'%')
        ->orWhere('CP', 'LIKE', '%'.$criterio.'%')->get();

        $date = Carbon::now(); 
        $date = $date->format('Y-m-d');


        $pdf = PDF::loadView("reportes.pdfUsuarios",compact("users","date"));

        return $pdf->stream('reporteUsuarios.pdf');
        // return $pdf->download('reportesEmpleados.pdf');

    }

    public function reporteExcel(Request $request){
        $criterio = $request['criterio'];
        return Excel::download(new UsersExport($criterio),'Usuario-Reporte.xlsx');
    }
}
