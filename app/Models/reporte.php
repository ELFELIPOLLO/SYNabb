<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{
    use HasFactory;

    protected $table = 'reportes';

    protected $fillable = [
        'alumnoid',
        'grupotabla',
        'nombre',
        'asistencia',
        'entrega_de_trabajos',
        'otro',
        'comportamiento',
        'salud',
        'justificacion',
    ];
}
