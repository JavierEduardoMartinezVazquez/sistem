<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;
use Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create([
            'nombre' => 'Javier',
            'lastname' => 'Martinez',
            'email' => 'javier.martinez@correo.com.mx',
            'tipo'=> 1,
            'email_verified_at' => now(),
            'password' => Hash::make('hola123'),
            'remember_token' => Str::random(10),
        ]);
        User::factory(10)->create();
    }
}
