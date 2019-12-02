<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoriaPlatillo;

class MenuCategoriaController extends Controller
{ 
    public function index($id)
    {
    	return CategoriaPlatillo::where('id', $id)->get();
    }
}
