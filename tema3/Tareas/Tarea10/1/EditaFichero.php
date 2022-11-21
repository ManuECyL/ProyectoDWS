<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="../weebroot/css/estilos.css">

        <title>Editar fichero</title>
    </head>
    <body>
        <?php
            require("validar.php");

            if (existe('volver')) {
                header('Location: ./Tarea10.php');
                exit;
            }

            if (enviado()){

                if (($abrir = fopen($_REQUEST['fichero'],'w')) && existe("modificar")){

                    $escribir = $_REQUEST['area'];
                    fwrite($abrir,$escribir,strlen($escribir));
                    fclose($abrir);
                }

                header('Location: ./LeeFichero.php?fichero='. $_REQUEST['fichero']);

                exit();
            }

        ?>

        <form action="./EditaFichero.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="fichero" value="<?php
                echo $_REQUEST['fichero'];
            ?>">

            <textarea name="area" id="idArea" cols="40" rows="20"><?php

                if (!file_exists($_REQUEST['fichero'])){

                    if($abierto = fopen($_REQUEST['fichero'],'w')){
                        fclose($abierto);
                    }

                } else {

                    if($abierto = fopen($_REQUEST['fichero'],'r+')){
          
                        if (filesize($_REQUEST['fichero']) == 0){
                            echo "El fichero esta vacio escribe algo:";

                        } else {
                    
                            while($linea = fgets($abierto,filesize($_REQUEST['fichero']))){
                                echo $linea;
                            }
                        }

                    } else {
                    
                        while($linea = fgets($abierto,filesize($_REQUEST['fichero']))){
                                echo $linea;
                        }
                    }

                    fclose($abierto);
                }

            ?></textarea>

            <br>

            <input type="submit" value="Volver" name="volver">
            <input type="submit" value="Modificar" name="modificar">
        </form>
    </body>
</html>