<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos_registro.css">
</head>
<body>
	<h1>Registrarse</h1>
    <form method="post">
    	
    	<input type="text" name="name" placeholder="Nombres">
		<input type="text" name="lastname" placeholder="Apellidos">
    	<input type="number" name="phone" placeholder="Número Celular">
		<input type="text" name="addres" placeholder="Dirección de entrega">
		<input type="text" name="email" placeholder="Correo Electrónico">
		<input type="text" name="password" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registerInput.php");
        ?>
</body>
</html>