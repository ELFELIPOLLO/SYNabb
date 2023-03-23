<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportarController extends Controller
{   
    function consultar(Request $request){
        $alumno_id = $request->input('alumnoid');
        $tabla  = $request->input('alumnotabla');

        // Realizar consulta a la base de datos
        $alumno = DB::table($tabla)->where('id', $alumno_id)->first();

        // Si se encontró el alumno, obtener su nombre
        $nombre_alumno = '';
        if ($alumno) {
            $nombre_alumno = $alumno->Nombre;
        }

        // Enviar el nombre del alumno a la vista
        return view('reportar', [
            'nombre_alumno' => $nombre_alumno,
            'id_alumno' => $alumno_id,
            'tabla_alumno' => $tabla
        ]);
    }

    function add(Request $request){
        $request->validate([
            'Id' => 'required',
            'Tabla' => 'required',
            'Nombre' => 'required',
            'razon' => ['required', function ($attribute, $value, $fail) {
                if (!is_array($value) || count($value) < 1) {
                    $fail('Debe seleccionar al menos una razón.');
                }
            }],            
            'justificacion' => 'required',
        ]);
    
        $razones = array_fill(0, 5, false); // inicializa un arreglo con 5 elementos con valor false
    
        // Actualizar los valores de las razones que se hayan marcado como verdaderos
        foreach ($request->input('razon') as $index => $value) {
            if ($value == 'Asistencia') {
                $razones[0] = true;
            } elseif ($value == 'Comportamiento') {
                $razones[1] = true;
            } elseif ($value == 'Entrega de trabajos') {
                $razones[2] = true;
            } elseif ($value == 'Salud') {
                $razones[3] = true;
            } elseif ($value == 'Otro') {
                $razones[4] = true;
            }
        }
    
        // Insertar los datos en la tabla de reportes
        $query = DB::table('reportes')->insert([
            'alumnoid'=>$request->input('Id'),
            'grupotabla'=>$request->input('Tabla'),
            'nombre'=>$request->input('Nombre'),
            'asistencia'=>$razones[0],
            'comportamiento'=>$razones[1],
            'entrega_de_trabajos'=>$razones[2],
            'salud'=>$razones[3],
            'otro'=>$razones[4],
            'justificacion'=>$request->input('justificacion'),
        ]);
    
        if($query){
            return back()->with('success','Se guardó correctamente el reporte');
        }else{
            return back()->with('fail','Algo salió mal');
        }
    }    
}
