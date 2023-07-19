<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos_registro.css">
    <title>AGREGAR PRODUCTOS</title>
</head>
<body>
        <div class="formulario">
			<h2>Crear cuenta</h2>
            <?php 
        	include("AgregarProducto.php");
        	?>
			<form action="AgregarProducto.php" method="post" enctype="multipart/form-data">				
				<input type="text" name="codigoproducto" placeholder="codigo producto">
                <input type="text" name="nameproducto" placeholder="Nombre del producto">
				<input type="number" name="precio" placeholder="Precio Producto">
				<input type="file" name="imgproducto" placeholder="Imagen producto">
				<input id="form-button-crear" type="submit" value="Registrarse" name="AgregarProducto">
			</form>
		</div>
</body>
</html>