<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../weebroot/css/estilos.css">

        <title>Leer fichero</title>
    </head>

    <body>
        <?php
            require("validar.php");

            if (existe('volver')) {
                header('Location: ./Tarea10.php');
                exit;
            }

            if (existe('editar')) {
                header('Location: ./EditaFichero.php?fichero='. $_REQUEST['fichero']);
                exit();
            }
        ?>

        <form action="./LeeFichero.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="fichero" value="<?php
                echo $_REQUEST['fichero'];
            ?>">

            <textarea name="area" id="idArea" cols="40" rows="20" readonly><?php

                if($abierto = fopen($_REQUEST['fichero'],'r')){

                    if (filesize($_REQUEST['fichero']) == 0){
                        echo "El fichero esta vacio";

                    }else{

                        while($linea = fgets($abierto,filesize($_REQUEST['fichero']))){
                            echo $linea;
                        }
                    }

                    fclose($abierto);
                }

            ?></textarea>

            <br>

            <input type="submit" value="Volver" name="volver">
            <input type="submit" value="Editar" name="editar">
            
        </form>
    </body>
</html>