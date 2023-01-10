<?php
    require './seguro/conexion.php';
    require './funciones/funcionesBD.php';
    require './funciones/funcionesCookies.php';
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Tienda</title>

        <link rel="stylesheet" href="./webroot/css/style.css">
    </head>

    <body>
        <h1>Mi panaderia</h1>

        <main>
            <section class="productos">
                <h3>Todos</h3>

                <?php
                    $lista = findAll();

                    foreach ($lista as $producto) {

                        // print_r($producto);

                        echo "<article class='card'>";

                            echo "<br>";

                            echo "<img src='./webroot/".$producto['baja']."'> <b>" .$producto['nombre']. "</b> ";

                            // echo "<p> ".$producto['nombre']."</p>";

                            echo "<a href='verProducto.php?producto=".$producto['codigo']."'>Ver</a>";

                            echo "<br>";
                            echo "<br>";

                        echo"</article>";
                    }                
                ?>

            </section>


            <section class="vistos">
                <h3>Vistos</h3>

                <?
                // Recogemos de cookies los ids
                    mostrarUltimos();

                    $producto = findByID($id);
                    $producto = $producto[0];

                    echo "<article class='card'>";

                        echo "<br>";

                        echo "<a href= 'verProducto.php?producto=".$producto['codigo']."'>Imagen<img src='./webroot/".$producto['baja']."'> <b>".$producto['nombre']."</b></a>";

                        echo "<br>";

                    echo"</article>";
                ?>
            </section>
        </main>
    </body>

</html>