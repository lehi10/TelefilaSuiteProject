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
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("dni",8);
            $table->string('departamento');
            $table->string('ciudad');
            $table->tinyInteger("edad");
            $table->boolean('sis');
            $table->boolean("sexo");
            $table->string("celular",9)->nullable();
            //$table->string("direccion");
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
        Schema::dropIfExists('pacientes');
    }
}
