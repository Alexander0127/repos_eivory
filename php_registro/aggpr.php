<?php
include('conexion.php');

if(isset($_POST['AgregarProducto'])){
    $img_producto = $_FILES['imgproducto']['name'];
    $codigo_producto = $_POST['codigoproducto'];
    $name_producto = $_POST['nameproducto'];
    $precio_producto = $_POST['precio'];

    if(isset($imagen) && $imagen != ""){
        $tipo = $_FILES['imgproducto']['type'];
        $temp  = $_FILES['imgproducto']['tmp_name'];

       if( !((strpos($tipo,'gif') || strpos($tipo,'jpeg') || strpos($tipo,'webp')))){
          $_SESSION['mensaje'] = 'solo se permite archivos jpeg, gif, webp';
          $_SESSION['tipo'] = 'danger';
          header('location:../index.php');
       }else{
         $query = "INSERT INTO tabla_productos(id_producto, name_producto, precio_producto, img_producto) VALUES ('$codigo_producto','$name_producto','$precio_producto','$img_producto')";
         $resultado = mysqli_query($conn,$query);
         
       }
    }
}

?>