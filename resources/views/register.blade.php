<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/register.css') }}">
</head>
<body style="background-color: #FFFAD7">
  <img class="img1" src="img/img1.png">
	<img class="img2" src="img/img2.png">
	<img class="img3" src="img/img3.png">
	<img class="img4" src="img/img4.png">

  <div class="principal">
    <br>
    <center><div class="saludo">
      <b>Crea una cuenta</b>
    </div></center><br>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Email Address -->
        <label>CORREO ELECTRÓNICO</label><br>
        <input type="email" id="email" name="email" class="textbox" required><br><br>
        <!-- Name -->
        <label>NOMBRE DE USUARIO</label><br>
        <input type="text" id="name" name="name" class="textbox" required><br><br>
        <!-- Password -->
        <label>CONTRASEÑA</label><br>
        <input type="password" id="password" name="password" class="textbox" required><br><br>
        <!-- Confirm Password -->
        <label>CONFIRMAR CONTRASEÑA</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation" class="textbox" required><br><br>
        <a href="{{ route('login') }}" style="font-size:14px">Ya tengo una cuenta</a>
        <br><br>
        <button type="submit" class="boton">Registrar</button>
    </form>
  </div>
</body>
</html>
