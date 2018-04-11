<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTarifaTelefila extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarifa_telefila', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("monto_telefila");
            $table->unsignedInteger('id_hospital');
            $table->foreign('id_hospital')->references('id')->on("hospital");
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
        Schema::dropIfExists('tarifa_telefila');
    }
}
