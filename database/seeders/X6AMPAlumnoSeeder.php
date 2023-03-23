<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\x6AMPAlumno;
use Illuminate\Support\Facades\DB;

class X6AMPAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041701',
            'Nombre'                => 'Felipe Ibarra',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-01-09',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041702',
            'Nombre'                => 'Emilio Flores',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-11-01',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041703',
            'Nombre'                => 'Fernando Avendaño',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-02-22',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041704',
            'Nombre'                => 'Santiago Armenta',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-10-21',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041705',
            'Nombre'                => 'Irán Rosales',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-04-21',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041706',
            'Nombre'                => 'Estefanía Armenta',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-04-20',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041707',
            'Nombre'                => 'Jose León',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-02-10',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041708',
            'Nombre'                => 'Miranda Castro',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2005-08-01',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041709',
            'Nombre'                => 'Carlos Pérez',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-12-21',
        ]);
        DB::table('x6ampalumnos')->insert([
            'Num_Control'           => '203263041710',
            'Nombre'                => 'Lenin Flores',
            'Grupo'                 => '6AMP',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2005-07-05',
        ]);
    }
}
