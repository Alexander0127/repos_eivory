<?php
 //Conexion a la base de datos
    include("conexion.php");

    // Comprobar si el formulario ha sido enviado con el botón "AgregarProducto"
    if(isset($_POST['AgregarProducto'])){
        // Verificar que los campos del formulario no estén vacíos
        if(strlen($_POST['codigoproducto']) >= 1 && strlen($_POST['nameproducto']) >= 1 && strlen($_POST['precio']) >= 1){

            // Obtener los valores ingresados en los campos del formulario
            $codigo_producto = trim($_POST['codigoproducto']);
            $name_producto = trim($_POST['nameproducto']);
            $precio_producto = trim($_POST['precio']);

             // Convertir la imagen a datos binarios
            $img_producto = addslashes(file_get_contents($_FILES['imgproducto']['tmp_name']));

            // Crear la consulta SQL para agregar un nuevo producto
            $agregado = "INSERT INTO tabla_productos(id_producto, name_producto, precio_producto, img_producto) VALUES ('$codigo_producto','$name_producto','$precio_producto','$img_producto')";

            // Se agrega el nuevo producto en la base de datos
            $verificar_aggProducto = mysqli_query($conex,$agregado);

            // Comprobacion y mostrar mensajes
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