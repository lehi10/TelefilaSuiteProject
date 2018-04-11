<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMedicoHospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico_hospital', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps(); No es necesario en una tabla de muchos a muchos
            $table->unsignedInteger('id_medico'); //Primero tienes que declarar el atributo sin foreign
            $table->unsignedInteger('id_hospital'); //Lo mismo
            $table->foreign('id_medico')->references('id')->on('medico');
            $table->foreign('id_hospital')->references('id')->on('hospital');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico_hospital');
    }
}
