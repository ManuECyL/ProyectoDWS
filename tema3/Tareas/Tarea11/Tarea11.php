<?php
    // require("./validar.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 11</title>

        <!-- <link rel="stylesheet" href="weebroot/css/estilos.css"> -->

    </head>

    <body>
        <h1>Tarea 11 -  Transforma Fichero</h1>

        <form action="./Tarea11.php" method="post" enctype="multipart/form-data">

        <notas>
            <alumno>
                <nombre>maria</nombre>
                <nota1>10</nota1>
                <nota2>8</nota2>
                <nota3>9</nota3>
            </alumno>

        <?php

            $fila = 1;
            $datosTabla = array();

                if (($abrir = fopen("notas.csv", "r"))){
                    $j = 0;

                    while ($notas = fgetcsv($abrir,filesize('notas.csv'),';')){

                        $num = count($notas);

                        array_push($datosTabla,$notas);

                        echo "<br>";

                        for ($i = 0; $i < $num; $i++) { 
                            echo "<br>" . $notas[$i];
                        }
                    }

                    fclose($abrir);
                }
            ?>

        </form>


        
        <br>

        <ul>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/Tarea11.php" target="_blank">Código Tarea11</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/validar.php" target="_blank">Código Validar</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/LeeFicheroXML.php" target="_blank">Código LeeFicheroXML</a></li>
        </ul>
    </body>
</html>