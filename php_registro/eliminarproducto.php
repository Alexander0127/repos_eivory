<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos_registro.css">
    <title>ELIMINAR</title>
</head>
<body>
        <div class="formulario">
			<h2>ELIMINAR PRODUCTOS</h2>

			<form action="eliminarproducto.php" method="post" enctype="multipart/form-data">				
				<input type="text" name="codigoproducto" placeholder="codigo producto">
                <input type="submit" name="busqueda" value="Buscar">
				<input id="form-button-eliminar" type="submit" value="Eliminar" name="EliminarProducto">
			</form>
            
		</div>
        
        <?php 
        	include("conexion.php");
           
           
            if (isset($_POST['busqueda'])) {
                if (strlen($_POST['codigoproducto']) >= 1) {
                   
                    $id = trim($_POST['codigoproducto']);
                    $consulta = mysqli_query($conex, "SELECT * FROM tabla_productos WHERE id_producto='$id'");
        
                    if (mysqli_num_rows($consulta) === 0) {
                        echo "Producto no encontrado.";
                    } else {
                        $producto = mysqli_fetch_assoc($consulta);
                        echo "<h2>DETALLES DEL PRODUCTO:</h2>";
                        echo "Nombre: " . $producto['name_producto'] . "<br>";
                        echo "Precio: " . $producto['precio_producto'] . "<br>";
                        echo "Imagen: <br>";

                    }
                }
            }    
            
            if (isset($_POST['EliminarProducto'])) {
                if (strlen($_POST['codigoproducto']) >= 1) {
                    $id = trim($_POST['codigoproducto']);
                    $eliminar = mysqli_query($conex, "DELETE FROM tabla_productos WHERE id_producto='$id'");
                    echo "Producto eliminado correctamente.";
                }
            }    
            ?>
   
</body>
</html>