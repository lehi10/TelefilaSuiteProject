<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEspecialidadPacienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_paciente', function (Blueprint $table) {
            //
            $table->unsignedInteger("paciente_id");
            $table->unsignedInteger("especialidad_id");

            $table->foreign("paciente_id")->references('id')->on("pacientes");
            $table->foreign("especialidad_id")->references('id')->on("especialidads");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('especialidad_paciente');
    }
}
