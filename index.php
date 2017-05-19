<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\estilos.css">

</head>
<body>
		<form action="Login/login.php" method="post"> <!--Envia por get los valores "usr" y "pass"--> <!--NOTA: Si quieres cambiar el método tienes que borrarlo, guardar y volver a escribir el nuevo método-->

				<div align="center">
				<img src="IMAGENES\logo1.png" >
				</div>

				<h2>CIBUS</h2>

				<section class="main">

				<input type="email" name="usr" id="input_usuario" autofocus placeholder="&#128272; Correo electrónico" autocomplete="off" required>
				<input type="password" name="pass" id="input_pass" minlength="6" placeholder="&#128273; Contraseña" autocomplete="off" required>



			<input type="submit" name="sbmt" id="btn_submit">

			<div align="center">

			<a href="Registro/">¿No tienes cuenta? Regístrate</a>
			</div>

		</form>

</body>
</html>
