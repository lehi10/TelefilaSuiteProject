<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medico_id');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->dateTime('horaInicio_agenda');
            $table->dateTime('horaFinal_agenda');
            $table->char("dia_agenda",2);
            $table->boolean("disponibilidad");
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
        Schema::dropIfExists('agenda');
    }
}
