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
        Schema::create('citas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('paciente_id');
            $table->foreign('paciente_id')->references('id')->on("pacientes");
            $table->dateTime('fecha_cita');
            $table->boolean('confirmada_cita');
            $table->boolean('reservada_cita');
            $table->boolean('pagada_cita');
            $table->unsignedInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on("hospitals");
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
        Schema::dropIfExists('cita');
    }
}
