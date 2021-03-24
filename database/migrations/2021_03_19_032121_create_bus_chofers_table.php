<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusChofersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_chofers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_bus')->unsigned();
            $table->foreign('id_bus')->references('id')->on('buses');
            $table->integer('id_chofer')->unsigned();
            $table->foreign('id_chofer')->references('id')->on('chofers');
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
        Schema::dropIfExists('bus_chofers');
    }
}
