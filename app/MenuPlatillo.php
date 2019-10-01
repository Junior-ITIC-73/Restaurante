<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPlatillo extends Model
{
    protected $table="menu_platillos";
    protected $fillable=['id','nombre_platillo','descripcion_platillo','fecha'];
}
