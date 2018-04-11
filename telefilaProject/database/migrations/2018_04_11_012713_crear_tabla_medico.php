<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMedico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medico', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string("nombre_medico");
            $table->string("apellidos_medico");
            $table->char("sexo_medico",2);
            $table->char("telefono_medico",9);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medico');
    }
}
