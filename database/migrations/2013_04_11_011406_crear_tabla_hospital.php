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
            $table->string('ruc');
            $table->string('director');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('region');
            $table->string("telefono",9);
            $table->string('personaContacto');
            $table->tinyInteger('estado');
            $table->string('archivo_1')->nullable();
            $table->string('archivo_2')->nullable();
            $table->string('archivo_3')->nullable();
            $table->string('archivo_4')->nullable();
            $table->string('archivo_5')->nullable();
            $table->string('archivo_6')->nullable();
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
