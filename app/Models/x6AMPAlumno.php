<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class x6AMPAlumno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'x6ampalumnos';

    protected $fillable = [
        'Num_Control',
        'Nombre',
        'Grupo',
        'Sexo',
        'Fecha_de_nacimiento'
    ];
}
