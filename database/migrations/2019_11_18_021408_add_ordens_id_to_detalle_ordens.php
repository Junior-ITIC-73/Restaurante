<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddOrdensIdToDetalleOrdens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detalle_ordens', function (Blueprint $table) {
            $table->unsignedBigInteger('orden_id')->after('id')->nullable();
            $table->foreign('orden_id')->references('id')->on('ordens');
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
             $table->dropForeign(['orden_id']);
            $table->dropColumn('orden_id');
        });
    }
}
