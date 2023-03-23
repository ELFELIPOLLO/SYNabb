<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\x6AMOAlumno;
use Illuminate\Support\Facades\DB;

class X6AMOAlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041711',
            'Nombre'                => 'Rodolfo Vazquez',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-03-14',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041712',
            'Nombre'                => 'Laura García',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-12-02',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041713',
            'Nombre'                => 'Amairani Buelna',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-11-10',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041714',
            'Nombre'                => 'Paola Rodriguez',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-01-11',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041715',
            'Nombre'                => 'Juan Guerrero',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-03-30',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041716',
            'Nombre'                => 'Evelyn Camacho',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-05-19',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041717',
            'Nombre'                => 'Gabriela Villa',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 2,
            'Fecha_de_nacimiento'   => '2004-01-01',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041718',
            'Nombre'                => 'Jafet Pérez',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-12-24',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041719',
            'Nombre'                => 'Paul Mendez',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-09-08',
        ]);
        DB::table('x6amoalumnos')->insert([
            'Num_Control'           => '203263041720',
            'Nombre'                => 'Israel Cervantes',
            'Grupo'                 => '6AMO',
            'Sexo'                  => 1,
            'Fecha_de_nacimiento'   => '2004-08-14',
        ]);
    }
}
