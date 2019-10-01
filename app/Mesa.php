<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesa extends Model
{
    protected $table = "mesas";
    protected $fillable = [
    	'numero_mesa',
    	'descripcion_mesa'
    ];
}
