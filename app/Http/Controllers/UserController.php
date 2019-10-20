<?php

namespace App\Http\Controllers;

use App\User;
use App\http\Requests\FormUser;
use App\http\Requests\FormUserEdit;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return view('users.index',compact('users'));
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
}
