<link rel="stylesheet" href="../weebroot/css/estilos.css">

<h1>Ejercicio 4</h1>

<h3>Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) de dos 
    personas y muestre las fechas de nacimiento de ambos y la diferencia de edad en años.</h3>

<?php
    $date1 = $_GET["fecha1"];
    $date2 = $_GET["fecha2"];

    $fecha1 = date("Y-m-d", strtotime($date1));
    $fecha2 = date("Y-m-d", strtotime($date2));

    echo "Fecha Cumpleaños 1: " .$fecha1;
    echo "<br>";
    echo "Fecha Cumpleaños 2: " .$fecha2;
    echo "<br>";

    if ($fecha1 > $fecha2) {
        $dif = $fecha1 - $fecha2;
    
    }else {
        $dif = $fecha2 - $fecha1;
    }
    echo "<br>";
    echo "Hay " .$dif. " años de diferencia";
?>

<h3>Enlace Para ver contenido de fichero</h3>
<?php
    echo '<a href="http://192.168.1.58/ProyectoDWS/tema2/Tareas/Tarea2/Ejercicio4/contenido.php" target="_blank">Contenido Fichero</a>';    
?>