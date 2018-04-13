<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEspecialidadHospital extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('especialidad_hospital', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('especialidad_id');
            $table->unsignedInteger('hospital_id');
            $table->foreign('especialidad_id')->references('id')->on('especialidads');
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
        Schema::dropIfExists('especialidad_hospital');
    }
}
