<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
    <form method="post">
    	<h1>Conexion</h1>
    	<input type="text" name="name" placeholder="Nombres">
		<input type="text" name="lastname" placehorder="Apellidos">
    	<input type="number" name="phone" placeholder="Número Celular">
		<input type="text" name="addres" placeholder="Dirección de entrega">
		<input type="text" name="email" palceholder="Correo Electrónico">
		<input type="text" name="password" placeholder="Contraseña">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrarDatos.php");
        ?>
</body>
</html>