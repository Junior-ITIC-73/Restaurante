<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
	protected $fillable = [
        'user_id',
        'mesa_id',
        'folio_orden',
        'total_orden',
    ];

    public function user(){
    	return	$this->belongsTo(User::class);
    }
    public function detalle_ordens(){
    	return	$this->hasMany(MenuPlatillo::class);
    }
}
