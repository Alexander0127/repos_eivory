<?php
    include("conexion.php");

    if(isset($_POST['AgregarProducto'])){
        if(strlen($_POST['codigoproducto']) >= 1 && strlen($_POST['nameproducto']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['imgproducto'])){

            $codigo_producto = trim($_POST['codigoproducto']);
            $name_producto = trim($_POST['nameproducto']);
            $precio_producto = trim($_POST['precio']);
            $img_producto = trim($_POST['imgproducto']);

            $verificar_aggProducto = mysqli_query($conex, "INSERT INTO tabla_productos(id_producto, name_producto, precio_producto, img_producto) VALUES ('$codigo_producto','$name_producto','$precio_producto','$img_producto')");

            if ($verificar_aggProducto) 
	    	{?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
	        } 
            else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	        }
        }
    }

?>