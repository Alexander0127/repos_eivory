<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_registro.css">
</head>
<body>
	<header>
		<a href="./login.php" class="header-button">INICIAR</a>
		<a href="./indexregister.php" class="header-button">REGISTRAR</a>
	</header>
	<main>
		<div class="formulario">
			<h2>Crear cuenta</h2>
			<?php 
        	include("registerInput.php");
        	?>
			<form method="post">
				<input type="text" name="name" placeholder="Nombres">
				<input type="text" name="lastname" placeholder="Apellidos">
				<input type="number" name="phone" placeholder="Número Celular">
				<input type="text" name="addres" placeholder="Dirección de entrega">
				<input type="text" name="email" placeholder="Correo Electrónico">
				<input type="text" name="password" placeholder="Contraseña">
				<input id="form-button-crear" type="submit" value="Registrarse" name="register">
			</form>
		</div>
		
	</main>
    
			
</body>
</html>