<!DOCTYPE html>
<html>
<head>
	<title>Registrar usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css\estilos.css">
</head>
<body>
    <form method="post">
    	<h1>Conexion</h1>
    	<input type="text" name="name" placeholder="Nombre completo">
    	<input type="number" name="edad" placeholder="Edad">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("registrarDatos.php");
        ?>
</body>
</html>