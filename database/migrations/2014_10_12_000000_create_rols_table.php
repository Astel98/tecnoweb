<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',20);
            $table->string('descripcion',50);
            $table->timestamps();
        });

        DB::table('rols')
        ->insert(array('nombre' => 'Administrador','descripcion' => 'Gestiona todo'));
        DB::table('rols')
        ->insert(array('nombre' => 'Cliente','descripcion' => 'Cliente y ya'));
        DB::table('rols')
        ->insert(array('nombre' => 'Chofer','descripcion' => 'Empleado'));

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols');
    }
}
