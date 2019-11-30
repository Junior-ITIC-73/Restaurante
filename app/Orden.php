<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    public function user(){
    	return	$this->belongsTo(User::class);
    }
    public function detalle_ordens(){
    	return	$this->hasMany(MenuPlatillo::class);
    }
}
