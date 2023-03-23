<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\reporte;

class ReporteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reportes')->insert([
            'alumnoid'              => 1,
            'grupotabla'            => 'x2amcoalumnos',
            'nombre'                => 'Fernanda Sanchez',
            'asistencia'            => 1,
            'entrega_de_trabajos'   => 0,
            'otro'                  => 0,
            'comportamiento'        => 0,
            'salud'                 => 0,
            'justificacion'         => 'Duro mucho tiempo sin asistir a clase',
        ]);
    }
}
