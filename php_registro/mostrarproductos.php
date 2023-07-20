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
            <table border="2">
            <tr><td><img width="200px" src="data:image/jpg;base64, <?php echo base64_encode($mostrar['img_producto'])?>"></td></tr>
            <tr><td><?php echo $mostrar['name_producto']?></td></tr>
            <tr><td><?php echo $mostrar['precio_producto']?></td></tr>
            </table>
        </br>

        <?php
        }
        ?>
        
</body>
</html>