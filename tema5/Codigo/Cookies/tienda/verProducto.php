<?php
    require './seguro/conexion.php';
    require './funciones/funcionesBD.php';
    require './funciones/funcionesCookies.php';

    if (!isset($_REQUEST['producto'])) {
        header('Location: ./index.php');
    
    } else {
        $id = $_REQUEST['producto'];
        productoVisto($id);
    }
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ver</title>
    </head>

    <body>

        <section class="productos">
            <h1>Producto</h1>

            <?
                $producto = findByID($id);
                $producto = $producto[0];

                echo "<article class='card'>";

                    echo "<img src='./webroot/".$producto['alta']."'> <b>" .$producto['nombre']. "</b> <b>".$producto['descripcion']."</b> ";

                echo"</article>";
            ?>
        </section>

        <section class="vistos">
            <h3>Vistos</h3>
            
            <?php
                mostrarUltimos();
            ?>
        </section>
        
        <a href="./index.php">Volver</a>
    </body>

</html>