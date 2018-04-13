<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaControlPago extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('controlpagos', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('hospital_id');
            $table->unsignedInteger('telefila_tarifa_id');
            $table->foreign('telefila_tarifa_id')->references('id')->on('telefila_tarifas');
            $table->foreign('hospital_id')->references('id')->on("hospitals");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('controlpagos');
    }
}
