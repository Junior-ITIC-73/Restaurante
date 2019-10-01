<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
    	'user_id' ,
            'fecha_pedido' ,
            'estado_pedido' ,
            'total_pedido' ,
            'mesa_id' ,
    ];
}
