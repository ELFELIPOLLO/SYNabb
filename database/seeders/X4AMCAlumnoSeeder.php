<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\x4AMCAlumno;
use Illuminate\Support\Facades\DB;

class X4AMCAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041721',
            'Nombre'                => 'Ángel Cevallos',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-01-10',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041722',
            'Nombre'                => 'Julian López',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-04-28',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041723',
            'Nombre'                => 'Héctor Avilez',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-07-16',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041724',
            'Nombre'                => 'Frida Carrillo',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-02-23',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041725',
            'Nombre'                => 'Kelly Hernández',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-10-26',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041726',
            'Nombre'                => 'Aldo Avilez',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-06-05',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041727',
            'Nombre'                => 'Mario Ureta',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-02-11',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041728',
            'Nombre'                => 'Naomi Reyes',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-04-14',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041729',
            'Nombre'                => 'Natalia Galaviz',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-09-02',
        ]);
        DB::table('x4amcalumnos')->insert([
            'Num_Control'           => '203263041730',
            'Nombre'                => 'Hanna Amador',
            'Grupo'                 => '4AMC',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-12-21',
        ]);
    }
}
