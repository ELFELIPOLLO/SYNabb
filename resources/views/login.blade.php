<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/loginn.css') }}">
</head>
<body style="background-color: #FFFAD7">
	<img class="img1" src="img/img1.png">
	<img class="img2" src="img/img2.png">
	<img class="img3" src="img/img3.png">
	<img class="img4" src="img/img4.png">

	<div class="principal">
		<br><br>
		<center><div class="saludo">
			<b>¡Hola de nuevo!</b>
		</div></center><br>
		<form method="POST" action="{{ route('login') }}">
			@csrf
			<label for="email">CORREO ELECTRÓNICO</label><br>
			<input type="email" id="email" class="textbox" name="email" value="{{ old('email') }}" required autofocus><br><br>
			<label for="password">CONTRASEÑA</label><br>
			<input type="password" id="password" class="textbox" name="password" required><br>
			<a href="{{ route('register') }}" style="font-size:14px">No tengo una cuenta</a><br><br>
			<button type="submit" class="boton">Iniciar Sesión</button>
		</form>
	</div>
</body>
</html>
