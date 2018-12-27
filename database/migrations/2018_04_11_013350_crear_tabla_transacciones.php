<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTransacciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaccions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cita_id');
            $table->unsignedInteger('agenda_id');
            $table->unsignedInteger('telefila_tarifa_id');
            $table->unsignedInteger('hospital_id');
            $table->foreign('cita_id')->references('id')->on("citas");
            $table->foreign('agenda_id')->references('id')->on("agendas");
            $table->foreign('telefila_tarifa_id')->references('id')->on("telefila_tarifas");
            $table->foreign('hospital_id')->references('id')->on("hospitals")->onDelete('cascade');
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
        Schema::dropIfExists('transaccions');
    }
}
