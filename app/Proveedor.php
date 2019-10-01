<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'razon_social',
        'RFC',
        'telefono_proveedor',
        'calle',
        'num_interior',
        'num_exterior',
        'CP',
        'localidad',
    ];
}
