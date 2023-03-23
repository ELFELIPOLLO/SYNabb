<!DOCTYPE html>
<html>
<head>
	<title>Reportar</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
</head>
<body style="background-color: #FFFAD7">

  <img class="img1" src="img/img1.png">
  <img class="img2" src="img/img2.png">
  <img class="img3" src="img/img3.png">
  <img class="img4" src="img/img4.png">

  <div id="alert"></div>
  @if(Session::get('success'))
  <script>
    window.location.href = "{{ route('reportes') }}";
    alert("{{Session::get('success')}}");
  </script>
  @endif
  
  @if(Session::get('fail'))
  <script>
    window.location.href = "{{ route('reportes') }}";
    alert("{{Session::get('fail')}}");
  </script>
  @endif

  <form action="{{ route('add') }}" method="post">
    @csrf 
    <div class="principal">
    <br>
      <center><div class="saludo">
        <b>Reporta a un alumno</b>
      </div></center><br>
      <input type="hidden" name="Id" class="textbox" value="{{ $id_alumno }}" readonly>
      <input type="hidden" name="Tabla" class="textbox" value="{{ $tabla_alumno }}" readonly>
      <input type="text" name="Nombre" class="textbox" value="{{ $nombre_alumno }}" readonly><br><br>

      RAZÓN <br>
      <span style="color:red">@error('razon') {{ $message }} @enderror</span>
      <div class="seleccionador">
          <table>
              <tr>
                  <td><label><input type="checkbox" name="razon[]" value="Asistencia"> Asistencia</label></td>
                  <td><label><input type="checkbox" name="razon[]" value="Comportamiento"> Comportamiento</label></td>
              </tr>
              <tr>
                  <td><label><input type="checkbox" name="razon[]" value="Entrega de trabajos"> Entrega de trabajos</label></td>
                  <td><label><input type="checkbox" name="razon[]" value="Salud"> Salud</label></td>
              </tr>
              <tr>
                  <td><label><input type="checkbox" name="razon[]" value="Otro"> Otro</label></td>
              </tr>
          </table>
      </div><br>
      JUSTIFICA LA RAZÓN <br> <span style="color:red"> @error ('justificacion') {{ $message}} @enderror</span>
      <textarea id="TxtJustifica" class="textarea" name="justificacion"></textarea><br>
      <div class="botones">
        <button class="regresar" onclick="history.back()">Regresar</button>
        <button type="submit" class="reportar">Reportar</button>
      </div>
    </div>

  </form>
</body>
</html>
