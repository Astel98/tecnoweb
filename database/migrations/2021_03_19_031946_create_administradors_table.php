<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->primary('id');
            $table->boolean('estado');
            $table->foreign('id')->references('id')->on('users');
            $table->timestamps();
        });

        DB::table('administradors')->insert(array(
            'id' => '1',
            'estado' => 'true'
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administradors');
    }
}
