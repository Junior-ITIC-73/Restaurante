<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalle_orden extends Model
{
    public function orden(){
    	return	$this->belongsTo(Orden::class);
    }
    public function menu(){
    	return	$this->belongsTo(MenuPlatillo::class);
    }

    public function ventas(){
    	return	$this->hasMany(Venta::class);
    }
}
