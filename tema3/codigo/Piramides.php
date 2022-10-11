<!-- Explicación Operadores -->

<h2>Nave Espacial</h2>
<?php
    $a = "b";
    $b = "a";

    var_dump($a<=>$b);

    $a = 5;
    $b = 3;

    echo "<br>Logicos: ";
    var_dump($a & $b);

    // Multiplica x2 tantas veces como valor tenga la segunda variable. 5*2=10, 10*2=20, 20*2=40;
    var_dump($a << $b);

    // Quita tantos números en binario de la primera variable, como valor tenga la segunda variable --> 5 = 101 --> 5 = 1 Se quedaría en solo 1 porque quita 2 números empezando por la derecha
    $a = 5;
    $b = 2;
    var_dump($a >> $b);

    $a = 1;

    switch ($a) {
        case 1:
            echo "Es 1";
            break;
        
        case 2:
            echo "Es 2";
            break;

        default:
            echo "Otra";
            break;
    }

?>

<h2>Bucles</h2>
<?php
    // Ejemplo de break --> Cuando llegue a 5 se sale
    for ($i = 0; $i < 10; $i++) { 
        echo "<br>" .$i;

        if ($i == 5) {
            break;
        }
    }

    echo "<br>";

    // Ejemplo de continue --> No imprima el 5
    for ($i = 0; $i < 10; $i++) { 
       
        if ($i == 5) {
            continue;
        }
       
        echo "<br>" .$i;
    }

    echo "<br>";

    $a = 1;

    // While
     while ($a < 5) {
        echo "<br>" .$a;
        $a++;
    }

    echo "<br>";

    $a = 1;

    // Do While
    do {
        echo "<br>" .$a;
        $a++;
    } while ($a < 5);

    echo "<br>";
?>

    <!-- Piramide-->
    <h2>Piramide</h2>
<?php
    $variable = (int)$_GET["filas"];

    for ($i = 1; $i <= $variable; $i++) { 

        for ($blanco = 1; $blanco <= $variable; -$i, $blanco++) { 
            echo "&nbsp;&nbsp;";
        }
    
        for ($asteriscos = 1; $asteriscos < ($i*2 - 1); $asteriscos++) { 
            echo "*";
        }

        echo "<br>";
    }

?>