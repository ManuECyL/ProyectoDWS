<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hola Mundo</title>
    </head>

    <body>

        <h1>Pruebas de php con  HTML</h1>

            <?
                echo "<p>Hola Mundo</p>";
                print("<p>Hola Clase</p>");
            ?>

            <p> <? echo "Hello World" ?> </p>

            <?
                echo "<p>Hola Mundo <br> Hola Clase</p>";
            ?>

        <h1>Tipos de Datos</h1>

            <? 
                var_dump("maria");
                var_dump(3);
                var_dump(3.17);
            ?>

            <?    
                $mivariable = 3;
                var_dump($mivariable);
                $mivariable = "maria";
                echo "<br>";
                var_dump($mivariable);
                $mifloat = 3.17;
                echo "<br>";
                var_dump($mifloat);
                $nuevoint = (int)$mifloat;
                echo "<br>";
                var_dump($nuevoint);
                echo "<br>";
                $booleano = true;
                var_dump($booleano);
                echo "<br>";
                $vacia = NULL;
                $esnula = is_null($vacia);
                var_dump($vacia);
            ?>
    
        <h1>GET</h1>
            <?
                var_dump($_GET);
            ?>


        <h2>Tipo de dato</h2>
            <?php
                echo "La variable de mivariable es de tipo " . gettype($mivariable);
                echo "<br>";
                echo "La variable de la url hijos es " .$_GET["hijos"] . is_numeric($_GET["hijos"]);
                echo "<br>";
            ?>


        <h2>Variable de Variable</h2>
            <?php
                $viernes = "fiesta";
                $$viernes = "copas"; // Variable de una Variable
                echo $viernes;
                echo "<br>";
                echo $$viernes;
                echo "<br>";
                echo $fiesta;
            ?>

    </body>

</html>