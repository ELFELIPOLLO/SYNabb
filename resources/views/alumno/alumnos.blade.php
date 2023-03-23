@extends('main')

@section('contenido')
<a class="title">Alumnos {{ $grupo }}</a>
<table>
    <thead>
      <tr>
        <th>Num. Control</th>
        <th>Nombre</th>
        <th>Grupo</th>
        <th>Sexo</th>
        <th>Fecha de nacimiento</th>
        <th>Reportar</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($alumnos as $a)
        <tr>
          <td>{{ $a->Num_Control }}</td>
          <td>{{ $a->Nombre }}</td>
          <td>{{ $a->Grupo }}</td>
          <td>
            @if($a->Sexo == 1)
              Hombre
            @else
              Mujer
            @endif
          </td>
          <td>{{ $a->Fecha_de_nacimiento }}</td>
          <td><a href="{{ route('reportar', ['alumnoid' => $a->id, 'alumnotabla' => $tabla]) }}">Reportar</a></td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="d-flex">
    {!! $alumnos->links() !!}
  </div>
  
@stop