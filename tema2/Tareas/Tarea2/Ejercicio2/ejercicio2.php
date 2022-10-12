<link rel="stylesheet" href="../weebroot/css/estilos.css">

<h1>Ejercicio 2</h1>

<h3>Crea una página a la que se le pase por url una variable con el nombre que quieras y muestre el valor de la variable, el tipo, 
    si es numérico o no y si lo es, si es entero o float</h3>

<?php
    $var = $_GET['variable'];
    
    echo "El valor de la variable es: " .$var;
    echo "<br>";
    echo "La variable es de tipo: " .gettype($var);
    echo "<br>";

    if (is_numeric($var)) {
        echo "La variable es numérica";
        
        if (is_integer($var)) {
            echo " y es un entero";
        
        } elseif (is_float($var)) {
            echo " y es un float";
        }

    } else {
        echo "La variable NO es numérico";
    }
?>

<h3>Enlace Para ver contenido de fichero</h3>
<?php
    echo '<a href="http://192.168.1.58/ProyectoDWS/tema2/Tareas/Tarea2/Ejercicio2/contenido.php" target="_blank">Contenido Fichero</a>';    
?>
