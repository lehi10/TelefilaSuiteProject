<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPaciente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombre_paciente");
            $table->string("apellido_paciente");
            $table->string("dni_paciente",8);
            $table->string("telefono_paciente",9);
            $table->char("sexo_paciente",2);
            $table->string("edad_paciente");
            $table->string("direccion_paciente");
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
        Schema::dropIfExists('paciente');
    }
}
