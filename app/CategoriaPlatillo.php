<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPlatillo extends Model
{
    protected $table="categoria_platillos";
    protected $fillable=['id','nombre_categoria','imagen'];
}
