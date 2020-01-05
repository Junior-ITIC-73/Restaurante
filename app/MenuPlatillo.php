<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuPlatillo extends Model
{
    protected $table="menu_platillos";
    protected $fillable=['categoria_id','nombre_platillo','precio_platillo','descripcion_platillo','imagen'];
    
    public function categoria(){
    	return	$this->belongsTo(CategoriaPlatillo::class);
    }

    public function detalle_ordens(){
    	return	$this->hasMany(MenuPlatillo::class);
    }

}
 