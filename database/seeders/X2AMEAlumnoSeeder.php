<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\x2AMEAlumno;
use Illuminate\Support\Facades\DB;

class X2AMEAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041731',
            'Nombre'                => 'Ana García',
            'Grupo'                 => '2AME',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-01-10',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041732',
            'Nombre'                => 'Juan Pérez',
            'Grupo'                 => '2AME',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-03-20',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041733',
            'Nombre'                => 'María Hernández',
            'Grupo'                 => '2AME',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-05-15',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041734',
            'Nombre'                => 'Carlos Sánchez',
            'Grupo'                 => '2AME',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-07-02',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041735',
            'Nombre'                => 'Sofía Ramírez',
            'Grupo'                 => '2AME',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-09-09',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041736',
            'Nombre'                => 'Miguel Torres',
            'Grupo'                 => '2AME',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-11-18',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041737',
            'Nombre'                => 'Lucía Fernández',
            'Grupo'                 => '2AME',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-02-27',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041738',
            'Nombre'                => 'Javier García',
            'Grupo'                 => '2AME',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-04-14',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041739',
            'Nombre'                => 'Paulina Martínez',
            'Grupo'                 => '2AME',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-06-30',
        ]);
        DB::table('x2amealumnos')->insert([
            'Num_Control'           => '203263041740',
            'Nombre'                => 'José López',
            'Grupo'                 => '2AME',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-08-11',
        ]);
    }
}
