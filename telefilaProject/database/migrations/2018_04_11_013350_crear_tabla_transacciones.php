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
            $table->unsignedInteger('id_cita');
            $table->unsignedInteger('id_agenda');
            $table->unsignedInteger('id_tarifaTelefila');
            $table->unsignedInteger('id_hospital');
            $table->foreign('id_cita')->references('id')->on("cita");
            $table->foreign('id_agenda')->references('id')->on("agenda");
            $table->foreign('id_tarifaTelefila')->references('id')->on("tarifa_telefila");
            $table->foreign('id_hospital')->references('id')->on("hospital");
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
        Schema::dropIfExists('transacciones');
    }
}
