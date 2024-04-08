<!DOCTYPE html>
<?php

?>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>Login</title>
		<link href="estilos.css" rel="stylesheet" />
	</head>
	<body>
		<form action="login.php" method="post">
			<fieldset>
				<legend>Datos de acceso</legend>
				Usuario: <input type="text" name="usuario" id="usuario" />
				<br /><br />
				Contrasena: <input type="password" name="contrasena1" id="contrasena1" />
				<br /><br />
				<input type="submit" name="enviar" id="enviar" value="Iniciar sesion" />
			</fieldset>
		</form>
	</body>
</html>