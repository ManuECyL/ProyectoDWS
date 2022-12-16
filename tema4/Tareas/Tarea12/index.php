<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Practica 12</title>
    </head>

    <body>
        <?php

            require('conexionBD.php');
            require('funcionesBD.php');

            if (enviar()){
                $script = anadir();
                $conexion2 = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS);
                mysqli_multi_query($conexion2,$script);
            }
        ?>

        <form action="index.php" method="post">

            <?php
                try {
                    $conexion1= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);

                    echo "<a href='leerTabla.php'>Leer Tabla</a>";
                    echo "<br><br>";

                    echo "<a href='modificar.php?sentencia=insertar'>Insertar Registro</a>";
                    
                } catch (Exception $ex) {

                    if ($ex->getCode() == 1045){
                        echo "Credenciales incorrectas";
                    }
                    
                    if ($ex->getCode() == 1049){
                        echo "No existe la base de datos";
                        echo "<br><br>";

                        // Botón para añadir la BD si no existe
                        echo '<input type="submit" value="Añadir BBDD tienda" name="script">';
                    }      

                    if ($ex->getCode() == 2002){
                        echo "Tiempo de conexión finalizado";
                    }       
                }

            ?>

        </form>

    </body>

</html>