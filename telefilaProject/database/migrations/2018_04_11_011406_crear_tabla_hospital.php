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
        Schema::create('hospital', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre_hospital');
            $table->char("telefono_hospital",6);
            $table->string("direccion_hospital");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital');
    }
}
