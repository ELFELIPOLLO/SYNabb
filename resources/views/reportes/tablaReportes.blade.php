@extends('main')

@section('contenido')
<a class="title">Reportes {{ $grupo }}</a>
<table>
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Asistencia</th>
      <th>No trabaja</th>
      <th>Comportamiento</th>
      <th>Salud</th>
      <th>Otro</th>
      <th>Justificacion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($reportes as $reporte)
      <tr>
        <td>{{ $reporte->nombre }}</td>
        <td>{{ $reporte->asistencia ? 'Si' : 'No' }}</td>
        <td>{{ $reporte->entrega_de_trabajos ? 'Si' : 'No' }}</td>
        <td>{{ $reporte->comportamiento ? 'Si' : 'No' }}</td>
        <td>{{ $reporte->salud ? 'Si' : 'No' }}</td>
        <td>{{ $reporte->otro ? 'Si' : 'No' }}</td>
        <td>{{ $reporte->justificacion }}</td>
      </tr>
    @endforeach
  </tbody>
</table>
  <div class="d-flex">
    {!! $reportes->links() !!}
  </div>
  
@stop
