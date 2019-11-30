<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuPlatillosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_platillos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre_platillo');
            $table->double('precio_platillo');
            $table->string('descripcion_platillo');
            $table->string('imagen')->nullable();
            $table->timestamps();
        });
    }
 
    /** 
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_platillos');
    }
}
