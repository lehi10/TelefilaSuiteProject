<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("dni",8)->nullable();
            $table->string('ciudad')->nullable();
            $table->boolean('sis')->nullable();
            $table->string("celular",9)->nullable();
            $table->boolean("sexo")->nullable();
            $table->tinyInteger("edad")->nullable();
            $table->string("direccion")->nullable();
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
        Schema::dropIfExists('personas');
    }
}
