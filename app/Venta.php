<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
	protected $fillable = [
        'user_id',
        'orden_id',
        'folio_venta',
        'tipo_de_pago',
    ];

     public function user(){
    	return	$this->belongsTo(User::class);
    }
     public function orden(){
    	return	$this->belongsTo(detalle_orden::class);
    }
}
