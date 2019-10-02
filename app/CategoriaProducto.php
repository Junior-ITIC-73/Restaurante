<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletes;

class CategoriaProducto extends Model
{
    //use SoftDeletes;
    
    protected $fillable = [
        'nombre_categoria'
    ];
}
