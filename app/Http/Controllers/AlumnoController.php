<?php

namespace App\Http\Controllers;

use App\Models\x6AMPAlumno;
use App\Models\x2AMCOAlumno;
use App\Models\x2AMEAlumno;
use App\Models\x4AMCAlumno;
use App\Models\x6AMOAlumno;
//Agregar mas modelos de alumnos cuando se ocupe
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    function consultar6AMP(){
        $alumnos = x6AMPAlumno::paginate(7);
        $grupo = x6AMPAlumno::first()->Grupo;
        $tabla = (new x6AMPAlumno)->getTable();
        return view('alumno.alumnos', compact('alumnos','grupo','tabla'));
    }

    function consultar2AMCO(){
        $alumnos = x2AMCOAlumno::paginate(7);
        $grupo = x2AMCOAlumno::first()->Grupo;
        $tabla = (new x2AMCOAlumno)->getTable();
        return view('alumno.alumnos', compact('alumnos','grupo', 'tabla'));
    }
    
    function consultar2AME(){
        $alumnos = x2AMEAlumno::paginate(7);
        $grupo = x2AMEAlumno::first()->Grupo;
        $tabla = (new x2AMEAlumno)->getTable();
        return view('alumno.alumnos', compact('alumnos','grupo', 'tabla'));
    }
    
    function consultar4AMC(){
        $alumnos = x4AMCAlumno::paginate(7);
        $grupo = x4AMCAlumno::first()->Grupo;
        $tabla = (new x4AMCAlumno)->getTable();
        return view('alumno.alumnos', compact('alumnos','grupo', 'tabla'));
    }
    
    function consultar6AMO(){
        $alumnos = x6AMOAlumno::paginate(7);
        $grupo = x6AMOAlumno::first()->Grupo;
        $tabla = (new x6AMOAlumno)->getTable();
        return view('alumno.alumnos', compact('alumnos','grupo', 'tabla'));
    }    
}



