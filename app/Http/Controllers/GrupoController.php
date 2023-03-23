<?php

namespace App\Http\Controllers;

use App\Models\x6AMPAlumno;
use App\Models\x2AMCOAlumno;
use App\Models\x2AMEAlumno;
use App\Models\x4AMCAlumno;
use App\Models\x6AMOAlumno;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    function consultar(){
        $alumnos6AMP = x6AMPAlumno::count();
        $alumnos2AMCO = x2AMCOAlumno::count();
        $alumnos2AME = x2AMEAlumno::count();
        $alumnos4AMC = x4AMCAlumno::count();
        $alumnos6AMO = x6AMOAlumno::count();
        return view('alumno.grupos', compact('alumnos6AMP','alumnos2AMCO','alumnos2AME','alumnos4AMC','alumnos6AMO'));
    }
}
