<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MOSTRAR PRODUCTOS</title>
</head>
<body>
    <h1>AQUI SE MOSTRARAN LOS PRODUCTOS</h1>
    <?php
        include("conexion.php");

        $muestra = "SELECT name_producto, precio_producto, img_producto FROM tabla_productos";
        $conexion_muestra = mysqli_query($conex, $muestra);
        while($mostrar = mysqli_fetch_array($conexion_muestra)){
            ?>
            <tr>
                <td><?php echo $mostrar['name_producto']?></td>
                <td><?php echo $mostrar['precio_producto']?></td>
                <td><?php echo $mostrar['img_producto']?></td>
            </tr>


        <?php
        }
        ?>
</body>
</html>