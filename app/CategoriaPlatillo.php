<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriaPlatillo extends Model
{
    protected $fillable=['nombre_categoria','imagen'];

    public function platillos(){
    	return	$this->hasMany(MenuPlatillo::class);
    }
}
