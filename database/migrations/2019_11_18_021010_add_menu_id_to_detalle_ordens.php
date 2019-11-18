<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMenuIdToDetalleOrdens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_ordens', function (Blueprint $table) {
             $table->unsignedBigInteger('menu_id')->after('id')->nullable();
            $table->foreign('menu_id')->references('id')->on('menu_platillos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detalle_ordens', function (Blueprint $table) {
             $table->dropForeign(['menu_id']);
            $table->dropColumn('menu_id');
        });
    }
}
