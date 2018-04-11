<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cita', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('id_paciente');
            $table->foreign('id_paciente')->references('id')->on("paciente");
            $table->dateTime('fecha_cita');
            $table->boolean('confirmada_cita');
            $table->boolean('reservada_cita');
            $table->boolean('pagada_cita');
            $table->unsignedInteger('id_hospital');
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
        Schema::dropIfExists('cita');
    }
}
