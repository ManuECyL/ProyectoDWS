<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../weebroot/css/estilos.css">

        <title>Editar Tabla</title>
    </head>

    <body>
        <?php

            $fila = 1;
            $datosTabla = array();

            if (($abrir= fopen("notas.csv", "r"))){
                $j = 0;

                while ($notas = fgetcsv($abrir,filesize('notas.csv'),';')){
                    array_push($datosTabla,$notas);
                }
                fclose($abrir);
            }
        ?>

        <?php

            require("validar.php");
        
            if (validarTodo()){               
                $datosTabla[$_REQUEST['indice']][1]=$_REQUEST['nota1'];
                $datosTabla[$_REQUEST['indice']][2]=$_REQUEST['nota2'];
                $datosTabla[$_REQUEST['indice']][3]=$_REQUEST['nota3'];

                if ($abrir = fopen('notas.csv','w')){

                    foreach($datosTabla as $campos){
                        fputcsv($abrir,$campos,";");
                    }
                }

                fclose($abrir);

                header('Location: ./Tarea10_2.php');
                exit();  

            } else {
        
        ?>

        <form action="./edita.php" method="POST">

            <input type="hidden" name="indice" value="<?php
                echo $_REQUEST['indice'];
            ?>">

            <p>
                <label for="idAlumno">Alumno: </label>
                <?php
                    echo "<p>". $datosTabla[$_REQUEST['indice']][0] . "</p>";
                ?>
            </p>

            <p>
                <label for="idNota1">Nota 1</label>
                <input type="text" name="nota1" id="idNota1" value="<?php
                    echo $datosTabla[$_REQUEST['indice']][1];
                ?>">

                <?php
                    if (enviado()) {

                        if (vacio('nota1')){
                            echo "<p style='color: red'>Introduce una nota</p>";

                        } elseif (!patNotas('nota1')){
                            echo "<p style='color: red'>Nota incorrecta</p>";
                        }
                    }
                    
                ?>
            </p>

            <p>
                <label for="idNota2">Nota2</label>
                <input type="text" name="nota2" id="idNota2" value="<?php
                    echo $datosTabla[$_REQUEST['indice']][2];
                ?>">

                <?php
                    if (enviado()) {

                        if (vacio('nota2')){
                            echo "<p style='color: red'>Introduce una nota</p>";

                        } elseif (!patNotas('nota2')){
                            echo "<p style='color: red'>Nota incorrecta</p>";
                        }
                    }
                    
                ?>
            </p>

            <p>
                <label for="idNota3">Nota3</label>
                <input type="text" name="nota3" id="idNota3" value="<?php
                    echo $datosTabla[$_REQUEST['indice']][3];
                ?>">

                <?php
                    if (enviado()) {

                        if (vacio('nota3')){
                            echo "<p style='color: red'>Introduce una nota</p>";
                            
                        } elseif (!patNotas('nota3')){
                            echo "<p style='color: red'>Nota incorrecta</p>";
                        }
                    }
                    
                ?>
            </p>

            <input type="submit" value="Guardar" name="guardar" class="colorin">
        </form>

        <?php
            }
        ?>

    </body>
</html>

