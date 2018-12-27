<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->boolean('pedestal');
            $table->unsignedInteger('especialidad_id');
            $table->unsignedInteger('medico_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('hospital_id');

            $table->foreign('especialidad_id')->references('id')->on('especialidads');
            $table->foreign('medico_id')->references('id')->on('medicos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onDelete('cascade');
            
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
        Schema::dropIfExists('consultorios');
    }
}
