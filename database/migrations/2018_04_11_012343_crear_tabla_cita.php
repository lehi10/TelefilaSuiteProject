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
            $table->date('fecha');
            $table->time('horaInicio');
            $table->time('horaFinal');


            $table->unsignedInteger('paciente_id');
            $table->unsignedInteger('hospital_id');
            $table->boolean('pagado');
            
            $table->foreign('paciente_id')->references('id')->on("pacientes");
            $table->foreign('hospital_id')->references('id')->on("hospitals");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
}
