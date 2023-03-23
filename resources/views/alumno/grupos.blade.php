@extends('main')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/grupos.css') }}">
<a class="title">Grupos</a>
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('grupos6AMP') }}">6AMP</a></h5>
      <p class="card-text">Cantidad de alumnos: {{ $alumnos6AMP }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('grupos2AMCO') }}">2AMCO</a></h5>
      <p class="card-text">Cantidad de alumnos: {{ $alumnos2AMCO }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('grupos2AME') }}">2AME</a></h5>
      <p class="card-text">Cantidad de alumnos: {{ $alumnos2AME }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('grupos4AMC') }}">4AMC</a></h5>
      <p class="card-text">Cantidad de alumnos: {{ $alumnos4AMC }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('grupos6AMO') }}">6AMO</a></h5>
      <p class="card-text">Cantidad de alumnos: {{ $alumnos6AMO }}</p>
    </div>
  </div>
</div>
@stop