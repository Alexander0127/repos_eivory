<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['phone']) >= 1 && strlen($_POST['phone']) >= 1 && strlen($_POST['addres']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {
	    $name = trim($_POST['name']);
	    $edad = trim($_POST['edad']);
	    $consulta = "INSERT INTO usuario(nombre, edad) VALUES ('$name','$edad')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) 
	    	{?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
            <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}
?>