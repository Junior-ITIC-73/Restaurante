<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->boolean('sexo')->nullable();
            $table->string('telefono_empleado')->nullable();
            $table->string('calle')->nullable();
            $table->string('num_interior')->nullable();
            $table->string('num_exterior')->nullable();
            $table->string('CP')->nullable();
            $table->string('localidad')->nullable();
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
        Schema::dropIfExists('empleados');
    }
}
