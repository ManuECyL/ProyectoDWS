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

        <link rel="stylesheet" href="weebroot/css/estilos.css">

    </head>

    <body>
        <h1>Tarea 11 -  Transforma Fichero</h1>

        <?php

            $datosTabla = array();

                if (($abrir = fopen("notas.csv", "r"))){

                    $j = 0;

                    while ($notas = fgetcsv($abrir,filesize('notas.csv'),';')){

                        array_push($datosTabla,$notas);
                    }

                    fclose($abrir);
                }
            
            // Creacion del objeto DOMDocument
            $XML = new DOMDocument("1.0", "utf-8");

            // Para que salga bien formateado 
            $XML -> formatOutput = true;

            // La primera etiqueta será el nombre de raiz
            $raiz =  $XML -> appendChild($XML -> createElement("notas"));


            $i=0;

            foreach ($datosFichero as $alumnos) {

                $alumno = $raiz -> appendChild($XML->createElement("alumno"));
                
                foreach ($alumnos as $datoAlumno) {

                    if ($i == 0) {
                        $alumno -> appendChild($XML -> createElement("nombre",$datoAlumno));
                    }
                    if ($i == 1) {
                        $alumno -> appendChild($XML -> createElement("nota1",$datoAlumno));
                    }
                    if ($i == 2) {
                        $alumno -> appendChild($XML -> createElement("nota2",$datoAlumno));
                    }
                    if ($i == 3) {
                        $alumno -> appendChild($XML -> createElement("nota3",$datoAlumno));
                    }

                    $i++;
                }

                $i=0; 
            }
    
            if ($XML -> save("notas.xml")){
                header('Location: ./LeerFicheroXML.php');
                exit();

            } else {
                echo "Fallo al guardarse";
            }

        ?>

        <br>

        <ul>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/Tarea11.php" target="_blank">Código Tarea11</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/validar.php" target="_blank">Código Validar</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/LeeFicheroXML.php" target="_blank">Código LeeFicheroXML</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea11/LeeFicheroXML.php" target="_blank">Código EditaFicheroXML</a></li>
        </ul>
    </body>
</html>