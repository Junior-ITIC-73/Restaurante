<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
     public function user(){
    	return	$this->belongsTo(User::class);
    }
     public function orden(){
    	return	$this->belongsTo(detalle_orden::class);
    }
}
