<?php
    include("conexion.php");

    if(isset($_POST['AgregarProducto'])){
        if(strlen($_POST['codigoproducto']) >= 1 && strlen($_POST['nameproducto']) >= 1 && strlen($_POST['precio']) >= 1 && strlen($_POST['imgproducto'])){

            $codigo_producto = trim($_POST['codigoproducto']);
            $name_producto = trim($_POST['nameproducto']);
            $precio_producto = trim($_POST['precio']);
            $img_producto = trim($_POST['imgproducto']);

            $verificar_aggProducto = mysqli_query()
        }
    }

?>