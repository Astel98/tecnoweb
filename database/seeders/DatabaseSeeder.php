<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\User;
use App\Models\administrador;
use App\Models\cliente;
use App\Models\chofer;
use App\Models\bus;
use App\Models\ruta;
use App\Models\tramo;
use App\Models\punto;
use App\Models\tarifa;
use App\Models\promocion;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create('App\User');
        foreach (range(1,50) as $value) {
            DB::table('users')->insert([
                'nombre'=>$faker->firstName,
                'apellido' => $faker->lastName,
                'ci' => $faker->unique()->numberBetween(1000, 5000),
                'genero' => 'M',
                'direccion' => 'Mi Casa',
                'fecha_nac' => $faker->date('d-m-Y'),
                'email' => $faker->unique()->safeEmail,
                'telefono' => $faker->unique()->numberBetween(1000, 5000),
                'estado' => 'true',
                'password' => '$2y$10$nXuEZuFD82jRZDlQo2J/HOHNx0Zu1OobAm9UPudbljQrUUY6oO.2q',
                'id_rol' => '1'
            ]);
            DB::table('administradors')->insert([
                'id'=>$value+1,
                'estado' => 'true'
            ]);
        };
    }
}
