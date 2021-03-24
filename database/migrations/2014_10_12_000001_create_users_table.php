<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('email')->unique();
            $table->string('ci',50)->unique();
            $table->string('password');
            $table->string('genero',1);
            $table->string('direccion',50)->nulleable();
            $table->string('telefono',50)->unique();
            $table->date('fecha_nac');

            $table->timestamp('email_verified_at')->nullable();            
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rols');
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
