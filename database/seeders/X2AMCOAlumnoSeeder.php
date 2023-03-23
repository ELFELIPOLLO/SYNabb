<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\x2AMCOAlumno;
use Illuminate\Support\Facades\DB;

class X2AMCOAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Fernanda Sanchez',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-01-11',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Ivanna Gaxiola',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-09-12',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Alexia Mendoza',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-05-05',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Isa Sandoval',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-02-21',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Pedro Baez',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-31',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Alexander Rubio',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-20',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Linda Corrales',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-12-14',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Alexa Marquez',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-06-05',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Luisa Torres',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-09-09',
        ]);
        DB::table('x2amcoalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'María Ruedas',
            'Grupo'                 => '2AMCO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-10-24',
        ]);
    }
}
