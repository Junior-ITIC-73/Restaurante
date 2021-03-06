<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public $maxAttempts = 3;
    public $decayMinutes = 1;
    
    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // *
    //  * Create a new controller instance.
    //  *
    //  * @return void
    public function __construct()
    {
        $this->middleware('guest',['only' => 'showLoginForm']);
    }

    public function showLoginForm(){
        return view('Arboleda.Login');
    }
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function login(){
        $credentials = $this->validate(request(),[
            'email' => 'required|email|string',
            'password'=> 'required|string' 
        ]);
        // return $credentials;
        if(Auth::attempt($credentials)){
            return redirect()->route('admin.index');
        }

        return back()
        ->withErrors(['email'=>trans('auth.failed')])
        ->withInput(request(['email']));

    }

    public function logout(){
        Auth::logout();
        return redirect()->route('arboleda.login');
    }

    
}
