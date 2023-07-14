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

		do{
			$pase = 2;
			$idusu = rand(100000000, 999999999);
			$verificar_id = mysqli_query($conex, "SELECT * FROM register WHERE id_usuario='$idusu'");
			if (mysqli_num_rows($verificar_id) > 0) {
				$pase = 1;
			}
			else{$pase = 0; echo "Numero de pase es: '$pase'";}
		}while($pase = 0);

		$verificar_correo = mysqli_query($conex, "SELECT * FROM register WHERE email='$email'");
		if (mysqli_num_rows($verificar_id) > 0) {
			?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
		}
		else 
		{
			$consulta = "INSERT INTO register(id_usuario, nombre, apellido, telefono, direccion, email, contraseña) VALUES ($idusu,'$name','$lastname','$phone','$addres','$email','$password')";
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
	    
}
?>