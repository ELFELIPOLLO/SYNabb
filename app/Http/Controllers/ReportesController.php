<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reporte;

class ReportesController extends Controller
{
    function consultar(){

        $reportes6AMP = DB::table('reportes')->where('grupotabla', 'x6ampalumnos')->count();
        $reportes2AMCO = DB::table('reportes')->where('grupotabla', 'x2amcoalumnos')->count();
        $reportes2AME = DB::table('reportes')->where('grupotabla', 'x2amealumnos')->count();
        $reportes4AMC = DB::table('reportes')->where('grupotabla', 'x4amcalumnos')->count();
        $reportes6AMO = DB::table('reportes')->where('grupotabla', 'x6amoalumnos')->count();

        return view('reportes', [
            'reportes6AMP' => $reportes6AMP,
            'reportes2AMCO' => $reportes2AMCO,
            'reportes2AME' => $reportes2AME,
            'reportes4AMC' => $reportes4AMC,
            'reportes6AMO' => $reportes6AMO,
        ]);
    }

    function consultar2AMCO(){
        $reportes = reporte::where('grupotabla', 'x2amcoalumnos')->paginate(7);
        $grupo = '2AMCO';
        return view('reportes.tablaReportes', compact('reportes','grupo'));
    }
    function consultar6AMP(){
        $reportes = reporte::where('grupotabla', 'x6ampalumnos')->paginate(7);
        $grupo = '6AMP';
        return view('reportes.tablaReportes', compact('reportes','grupo'));
    }
    function consultar4AMC(){
        $reportes = reporte::where('grupotabla', 'x4amcalumnos')->paginate(7);
        $grupo = '4AMC';
        return view('reportes.tablaReportes', compact('reportes','grupo'));
    }
    function consultar6AMO(){
        $reportes = reporte::where('grupotabla', 'x6amoalumnos')->paginate(7);
        $grupo = '6AMO';
        return view('reportes.tablaReportes', compact('reportes','grupo'));
    }
    function consultar2AME(){
        $reportes = reporte::where('grupotabla', 'x2amealumnos')->paginate(7);
        $grupo = '2AME';
        return view('reportes.tablaReportes', compact('reportes','grupo'));
    }
}

