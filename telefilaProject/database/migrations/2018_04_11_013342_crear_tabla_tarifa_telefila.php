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
        Schema::create('telefila_tarifas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("monto_telefila");
            $table->unsignedInteger('hospital_id');
            $table->foreign('hospital_id')->references('id')->on("hospitals");
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
        Schema::dropIfExists('telefila_tarifas');
    }
}
