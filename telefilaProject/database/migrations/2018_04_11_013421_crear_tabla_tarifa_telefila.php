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
            $table->timestamps();
            $table->int("monto_telefila");
            $table->foreign('id_hospital')->references('id')->on("hospital");
            
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
