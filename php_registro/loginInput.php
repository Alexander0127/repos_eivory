<?php
include("conexion.php");

if (isset($_POST['LOGIN'])) {
    if (strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
		
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
        $verificar_id = mysqli_query($conex, "SELECT * FROM register WHERE email='$email' AND contraseña = $password");    
		
    	 }
}
?>