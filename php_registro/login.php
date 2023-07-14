<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_registro.css">
</head>
<body>
	<div class="formulario">
		<form method="post">
			<input type="text" name="email" placeholder="Correo Electrónico">
			<input type="text" name="password" placeholder="Contraseña">
			<input type="submit" name="LOGIN">
    	</form>
	</div>
    
        <?php 
        include("registerInput.php");
        ?>
</body>
</html>