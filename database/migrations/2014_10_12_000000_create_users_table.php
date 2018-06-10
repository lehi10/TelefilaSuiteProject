<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username')->unique();
            $table->string('password');

            //Agregar el roll
            $table->boolean('estado');
            
            $table->string('nombres');
            $table->string('apellidos');
            //Agregar id hospital !!
            $table->integer('hospital_id')->unsigned()->nullable();
            $table->integer('rol_id')->unsigned();

            $table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('hospital_id')->references('id')->on('hospitals');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
