<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Tabla no referenceada
        Schema::create('medicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('cmp');
            $table->string('celular');
            $table->tinyInteger('turno');

            $table->unsignedInteger('especialidad_id');
            $table->unsignedInteger('hospital_id');

            $table->foreign('especialidad_id')->references('id')->on('especialidads');
            $table->foreign('hospital_id')->references('id')->on('hospitals');

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
        Schema::dropIfExists('medicos');
    }
}
