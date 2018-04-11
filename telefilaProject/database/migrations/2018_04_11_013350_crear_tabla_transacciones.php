<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTransacciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->foreign('id_cita')->references('id')->on("cita");
            $table->foreign('id_agenda')->references('id')->on("agenda");
            $table->foreign('id_tarifaTelefila')->references('id')->on("tarifa_telefila");
            $table->foreign('id_hospital')->references('id')->on("hospital");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transacciones');
    }
}
