<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../weebroot/css/estilos.css">

        <title>Tarea 10_2</title>
    </head>

    <body>

        <h1>Tarea 10_2</h1>

        <br>

        <table border="1">
            <tr>
                <th>Alumno</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th></th>
            </tr>

            <?php

                $fila = 1;
                $datosTabla = array();

                    if (($abrir = fopen("notas.csv", "r"))){
                        $j = 0;

                        while ($notas = fgetcsv($abrir,filesize('notas.csv'),';')){

                            $num = count($notas);

                            array_push($datosTabla,$notas);

                            echo "<tr>";

                            for ($i = 0; $i < $num; $i++) { 
                                echo "<td>" . $notas[$i] . "</td>";
                            }

                            //echo '<td> <input type="submit" name="' . $j++ .'" value="Editar"></td>';
                            echo '<td><a href="./EditaNotas.php?indice='. $j++ . '">Editar</td>';
                            echo "</tr>";
                        }

                        fclose($abrir);
                    }
            ?>
        </table>

        <br>

        <ul>
            <li><a href="../../../../verfichero.php?fichero=tema3/Tareas/Tarea10/2/Tarea10_2.php" target="_blank">Código Tarea10_2</a></li>
            <br>
            <li><a href="../../../../verfichero.php?fichero=tema3/Tareas/Tarea10/2/validar.php" target="_blank">Código Validar</a></li>
        </ul>
    </body>
</html>