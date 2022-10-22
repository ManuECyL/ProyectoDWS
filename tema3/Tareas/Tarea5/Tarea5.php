<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 5</title>

        <link rel="stylesheet" href="weebroot/css/estilos.css">
    </head>

    <body>
        <?php
            echo "<h1><center>Ejercicio 1</center></h1>";

                $datos = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

                echo "<h3>Datos Desordenados y Duplicados</h3>";

                foreach ($datos as $key => $value) {
                    echo "[" . $key . "] => " . $value . "<br>";
                }

                echo "<br>";

                $datosOrdenados = array_unique($datos);
                sort($datosOrdenados);

                echo "<h3>Datos Ordenados y Sin Duplicados</h3>";

                foreach ($datosOrdenados as $key => $value) {
                    echo "[" . $key . "] => " . $value . "<br>";
                }

                echo "<br>";



            echo "<h1><center>Ejercicio 2</center></h1>";

                $numeros = array(2,5,9,7,6,3,1,5,4,8,3,2,6,9,3,5,1,2,3);

                echo "<h3>Numeros Originales</h3>";

                foreach ($numeros as $key => $value) {
                    echo "[" . $key . "] => " . $value . "<br>";
                }

                echo "<br>";

                foreach ($numeros as $key => $value) {

                    if ($value == 3) {

                        $numeros[$key] = $key;
                    }
                }

                echo "<h3>Numeros Cambiados</h3>";

                foreach ($numeros as $key => $value) {
                    echo "[" . $key . "] => " . $value . "<br>";
                }

                echo "<br>";


            echo "<h1><center>Ejercicio 3</center></h1>";
            
                $lado=4;

                $matriz=array();

                for ($i=0; $i < $lado; $i++) { 
                    for ($j=0; $j < $lado; $j++) { 
                        
                    }
                }

                foreach ($matriz as $key ) {
                    echo $key . "&nbsp;&nbsp;";
                }



                //$filas = array(array((int)$_GET["tamanio"]), array((int)$_GET["tamanio"]));

                // $tablero = array(array(4), array(4));

                // foreach ($tablero as $key => $value) {

                //     echo $key;

                //     foreach ($value as $posicion => $numero) {

                //         echo "<br>" .$posicion. ": " .$numero;
                //     }

                // }

                // for ($fila = 1; $fila <= 4; $fila++) {
                //     echo "<br>" . 1 . " ";

                //     for ($columna = 2; $columna <=4 ; $columna++) {
                //         echo 1 . " ";
                //    }
                // }


        ?>
    </body>
</html>


