<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'nombre_producto',
        'cantidad',
        'costo',
        'fecha_ingreso',
        'activo',
        'categoria_id',
        'proveedor_id',
    ];

    public function categoria(){
        return $this->belongsTo(CategoriaProducto::class);
      }
    public function proveedor(){
        return $this->belongsTo(Proveedor::class);
    }

}
