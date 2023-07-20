<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos_registro.css">
    <title>PRODUCTOS</title>
</head>
<body>
        <div class="formulario">
			<h2>PRODUCTO</h2>

			<form action="eliminarproducto.php" method="post" enctype="multipart/form-data">				
				<input type="text" name="codigoproducto" placeholder="codigo producto">
				<input id="form-button-eliminar" type="submit" value="Eliminar" name="EliminarProducto">
			</form>
		</div>
        
        <?php 
        	include("conexion.php");

            $id = trim($_POST['id']);

            $eliminar = mysqli_query($conex, "DELETE FROM 'tabla_productos' WHERE id = '';");    
        ?>
</body>
</html>