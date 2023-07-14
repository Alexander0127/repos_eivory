<?php
include("conexion.php");

if (isset($_POST['LOGIN'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
		
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
        $verificar_login = mysqli_query($conex, "SELECT * FROM register WHERE email='$email' and contrasena = '$password'");    
        if(mysqli_num_rows($verificar_login) > 0){
            header("location: bienvenido.php");
        }
        else{
            ?> 
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			   <?php
        }
    	}
}
?>