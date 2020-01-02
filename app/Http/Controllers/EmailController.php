<?php

namespace App\Http\Controllers;

use App\Mail\MensajeRecibido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function contactanos(Request $request){

    	// dd($request); 
    	Mail::to('victor@arboledarestaurante.com')->send(new MensajeRecibido($request));
    	return redirect()->route('test')->with('status','Gracias por los comentarios ,nos pondremos en contacto contigo');
    }	
}
