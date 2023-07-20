<!DOCTYPE html>
<html>
<head>
	<title>LOG DE USUARIO</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../estilos/estilos_login.css">
</head>
<body class="content">
<header>
		<a href="./login.php" class="header-button">INICIAR</a>
		<a href="./indexregister.php" class="header-button">REGISTRAR</a>
	</header>
	<main>
		<div class="formulario">
			<h2>Iniciar sesión</h2>
			<?php 
        	include("loginInput.php");
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