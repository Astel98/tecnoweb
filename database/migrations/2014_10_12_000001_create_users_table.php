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
            $table->boolean('estado');
            $table->string('direccion',50)->nulleable();
            $table->string('telefono',50)->unique();
            $table->date('fecha_nac');
            $table->timestamp('email_verified_at')->nullable();            
            $table->integer('id_rol')->unsigned();
            $table->foreign('id_rol')->references('id')->on('rols');
            $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(array(
            'nombre' => 'hugo',
            'apellido' => 'lora',
            'ci' => '1234',
            'genero' => 'M',
            'direccion' => 'Mi casa',
            'fecha_nac' => '20-04-1998',
            'email' => 'hugo@gmail.com',
            'telefono' => '123456',
            'estado' => 'true',
            'password' => '$2y$10$nXuEZuFD82jRZDlQo2J/HOHNx0Zu1OobAm9UPudbljQrUUY6oO.2q',
            'id_rol' => 1
        ));
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
