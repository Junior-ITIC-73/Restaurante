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

    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function mesa(){
        return $this->belongsTo(Mesa::class);
    }
}
