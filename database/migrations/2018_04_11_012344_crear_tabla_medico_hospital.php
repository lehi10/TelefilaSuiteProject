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
        //Tabla apunta a tabla medico y hospital, por lo que estas dos tablas deben crearse antes que esta, por lo que se debe cambiar de nombre
        Schema::create('hospital_medico', function (Blueprint $table) {
            $table->increments('id');
            //$table->timestamps(); No es necesario en una tabla de muchos a muchos
            $table->unsignedInteger('medico_id'); //Primero tienes que declarar el atributo sin foreign
            $table->unsignedInteger('hospital_id'); //Lo mismo
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('hospital_id')->references('id')->on('hospitals');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_medico');
    }
}
