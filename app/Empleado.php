<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    
       protected $fillable = [
        'name', 
        'apellido_paterno', 
        'apellido_materno',
        'sexo',
        'telefono_empleado',
        'calle',
        'num_interior',
        'num_exterior',
        'CP',
        'localidad',
        'municipio_id',
    ];

     public function municipio(){
        return $this->belongsTo(Municipio::class);
      }
}

