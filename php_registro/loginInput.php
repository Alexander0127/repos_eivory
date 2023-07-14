<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['lastname']) >= 1 && strlen($_POST['phone']) >= 1 && strlen($_POST['addres']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 ) {
		$name = trim($_POST['name']);
	    $lastname = trim($_POST['lastname']);
		$phone = trim($_POST['phone']);
		$addres = trim($_POST['addres']);
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);

		
    	 }
}
?>