<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ReporteSeeder::class);
        $this->call(X2AMCOAlumnoSeeder::class);
        $this->call(X2AMEAlumnoSeeder::class);
        $this->call(X4AMCAlumnoSeeder::class);
        $this->call(X6AMOAlumnoSeeder::class);
        $this->call(X6AMPAlumnoSeeder::class);
    }
}
