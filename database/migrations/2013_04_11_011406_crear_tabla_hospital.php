<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaHospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('ruc',11);
            $table->string('telefono');
            $table->string('nombrePersona');
            $table->string('emailPersona');
            $table->string('celularPersona');
            
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('referencia')->nullable();
            $table->string('region'); //codigo de region
            $table->string('logo')->nullable();
            $table->string('contratos')->nullable();
            $table->date('fechaInicio');
            $table->unsignedInteger('tarifa');
            $table->tinyInteger('estado');
            $table->boolean('licenciaAnual');
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
        Schema::dropIfExists('hospitals');
    }
}
