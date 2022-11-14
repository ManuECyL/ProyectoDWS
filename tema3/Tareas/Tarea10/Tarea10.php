<?php
    require("./validar.php");
    require("./LeeFichero.php");
    require("./EditaFichero.php");
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 10</title>

        <!-- <link rel="stylesheet" href="weebroot/css/estilos.css"> -->

    </head>

    <body>
        <h1>Tarea 10</h1>

        <form action="./Tarea10.php" method="post" enctype="multipart/form-data">

            <p>
                <label for="idFichero">Fichero: </label>
                <input type="text" name="fichero" id="idFichero" 
                    value="<?php
                
                    $patron='/^.+\.(txt)$/';
                        
                    if ((editado() || leido()) && !vacio("fichero") && preg_match($patron, $_REQUEST["fichero"])) {
                            
                        if (existeDocumentoServer("fichero")) {
                            echo $_REQUEST("fichero");
                        
                        } else if (!existeDocumentoServer("fichero")) {
                            crearFichero();
                        }
                    }
                
                ?>">

                  
                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (vacio("fichero") && (editado() || leido())) {
                        ?>
                            <span style=color:red><-- Debe introducir un nombre!!</span>
                        <?
                    }

                    if (!vacio("fichero" && leido() && !existeDocumentoFile("fichero"))) {
                        ?>
                            <span style=color:red><-- El fichero no existe!!</span>
                        <?
                    }

                    if (!vacio("fichero") && (editado() || leido()) && !preg_match($patron, $_REQUEST["fichero"])) {
                        ?>
                        <span style=color:red><-- La extensión del fichero no es correcta!!</span>
                        <?
                    }
                ?>
            </p>

            <br>

            <input type="submit" value="Editar" name="editar" style=width:170px>
            <input type="submit" value="Leer" name="leer" style=width:170px>
        </form>

        <br>

        <ul>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea10/Tarea10.php" target="_blank">Código Tarea10</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea10/validar.php" target="_blank">Código Validar</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea10/EditaFichero.php" target="_blank">Código EditaFichero</a></li>
            <br>
            <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea10/LeeFichero.php" target="_blank">Código LeeFichero</a></li>
        </ul>
    </body>
</html>