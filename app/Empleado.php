<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = [
        'name',
        'sexo',
        'telefono_empleado',
        'calle',
        'num_interior',
        'num_exterior',
        'CP',
        'localidad',
    ];
}
