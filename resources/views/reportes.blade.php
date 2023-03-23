@extends('main')

@section('contenido')
<link rel="stylesheet" href="{{ asset('css/grupos.css') }}">
<a class="title">Reportes</a>
<div class="card-deck">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('reportes6AMP') }}">6AMP</a></h5>
      <p class="card-text">Cantidad de reportes: {{ $reportes6AMP }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('reportes2AMCO') }}">2AMCO</a></h5>
      <p class="card-text">Cantidad de reportes: {{ $reportes2AMCO }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('reportes2AME') }}">2AME</a></h5>
      <p class="card-text">Cantidad de reportes: {{ $reportes2AME }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('reportes4AMC') }}">4AMC</a></h5>
      <p class="card-text">Cantidad de reportes: {{ $reportes4AMC }}</p>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><a href="{{ route('reportes6AMO') }}">6AMO</a></h5>
      <p class="card-text">Cantidad de reportes: {{ $reportes6AMO }}</p>
    </div>
  </div>
</div>
@stop