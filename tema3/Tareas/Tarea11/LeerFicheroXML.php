<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="weebroot/css/estilos.css">

        <title>Leer Fichero XML</title>
    </head>

    <body>

        <table border="1">

                <tr>
                    <th>Alumno</th>
                    <th>Nota 1</th>
                    <th>Nota 2</th>
                    <th>Nota 3</th>
                    <th></th>
                </tr>

                <?php
                    // Interpreta un fichero XML en un objeto 
                    $notas = simplexml_load_file('notas.xml');
                    $j = 0;
                    
                    foreach($notas as $alumno){
                        echo "<tr>";

                        foreach ($alumno as $datoAlumno) {
                            echo "<td>" . $datoAlumno . "</td>";                 
                        }

                        echo '<td><a href="./EditarFicheroXML.php?indice='. $j++ . '>Editar</td>';
                        echo "</tr>";
                    }
                ?>
        </table>
    </body>
</html>