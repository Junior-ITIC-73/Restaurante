<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class checadorEmpleado extends Model
{
    protected $table="checador_empleados";
    protected $fillable=['empleado_id','hora_entrada','hora_salida'];
}
