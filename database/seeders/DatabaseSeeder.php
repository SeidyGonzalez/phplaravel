<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // Importar la clase Seeder correctamente
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('docente')->insert([
            'nombre' => 'admin',
            'apellido' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        DB::table('estudiante')->insert([
            'nombre' => 'studen',
            'apellido' => 'studen',
            'email' => 'studen@studen.com',
        ]);
    }
}