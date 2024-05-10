<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Rol;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create(
            [
                "name"=> "Administrador",
                "email"=> "admin@gmail.com",
                "password"=> bcrypt("12345"),
            ]
        );


        Rol::create(
            [
                "nombre"=> "administrador",
            ]
        );        
    }
}
