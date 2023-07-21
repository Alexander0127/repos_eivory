<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../estilos/estilos_registro.css">
</head>
<body>
	<header>
		<a href="./login.php" class="header-button">INICIAR</a>
		<a href="./indexregister.php" class="header-button">REGISTRAR</a>
	</header>
	<main>
		<div class="formulario">
			<h2>Crear cuenta</h2><br>
			<?php 
        	include("registerInput.php");
        	?>
			<form method="post">
				<input class="form-input" type="text" name="name" placeholder="Nombres">
				<input class="form-input" type="text" name="lastname" placeholder="Apellidos">
				<input class="form-input" type="number" name="phone" placeholder="Número Celular">
				<input class="form-input" type="text" name="addres" placeholder="Dirección de entrega">
				<input class="form-input" type="text" name="email" placeholder="Correo Electrónico">
				<input class="form-input" type="password" name="password" placeholder="Contraseña">
				<input class="form-button" type="submit" value="Registrarse" name="register">
			</form>
		</div>
		
	</main>
    
			
</body>
</html>