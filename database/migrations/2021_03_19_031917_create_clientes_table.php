<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->boolean('estudiante');
            $table->boolean('estado');
            $table->foreign('id')->references('id')->on('users');
            $table->integer('id_tarifa')->unsigned();
            $table->foreign('id_tarifa')->references('id')->on('tarifas');
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
        Schema::dropIfExists('clientes');
    }
}
