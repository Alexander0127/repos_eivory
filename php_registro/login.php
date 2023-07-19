<!DOCTYPE html>
<html>
<head>
	<title>LOG DE USUARIO</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_registro.css">
</head>
<body>
<header>
		<input class="header-button" type="submit" value="INICIAR">
		<input class="header-button"  type="submit" value="REGISTRAR">
	</header>
	<main>
		<div class="formulario">
			<h2>Iniciar sesión</h2>
			<?php 
        	include("registerInput.php");
        	?>
			<form method="post">
				<input type="text" name="email" placeholder="Correo Electrónico">
				<input type="text" name="password" placeholder="Contraseña">
				<input type="submit" id="form-button-crear" value="Iniciar sesión" name="LOGIN">
			</form>
		</div>
	</main>
</body>
</html>