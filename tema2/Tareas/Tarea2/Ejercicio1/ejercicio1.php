<link rel="stylesheet" href="../weebroot/css/estilos.css">

<h1>Ejercicio 1</h1>

<h3>Muestra el nombre del fichero que se está ejecutando</h3>
<?php
    echo basename(__FILE__);
    echo "<br>";
    echo "<br>";
?>


<h3>Muestra la dirección IP del equipo desde el que estás accediendo</h3>
<?php
    echo $_SERVER['REMOTE_ADDR'];
    echo "<br>";
    echo "<br>";
?>


<h3>Muestra el path donde se encuentra el fichero que se está ejecutando</h3>
<?php
    echo __FILE__;
    echo "<br>";
    echo "<br>";
?>


<h3>Muestra la fecha y hora actual formateada en 2022-09-4 19:17:18</h3>
<?php
    date_default_timezone_set("Europe/Madrid");
    echo date("d/m/Y h:i:s", time());
    echo "<br>";
    echo "<br>";
?>


<h3>Muestra la fecha y hora actual en Oporto formateada en (día de la semana, día de mes de año, hh:mm:ss, Zona horaria)</h3>
<?php
    date_default_timezone_set("Europe/Lisbon");
    echo date("d/m/Y h:i:s ", time()) .date_default_timezone_get();
    echo "<br>";
    echo "<br>";
?>


<h3>Inicializa y muestra una variable en timestamp y en fecha con formato dd/mm/yyyy de tu cumpleaños</h3>
<?php
    $cumple = new DateTime("1998-04-30");
    echo $cumple -> format('U = d/m/Y');
    echo "<br>";
    echo "<br>";
?>


<h3>Calcular la fecha y el día de la semana de dentro de 60 días</h3>
<?php
    date_default_timezone_set("Europe/Madrid");

    $hoy = date_create('2022-10-11');
    date_add($hoy, date_interval_create_from_date_string('60 days'));

    echo date_format($hoy, 'd-m-Y l');
    echo "<br>";
    echo "<br>";
?>

<h3>Enlace Para ver contenido de fichero</h3>
<?php
    echo '<a href="http://192.168.1.58/ProyectoDWS/tema2/Tareas/Tarea2/Ejercicio1/contenido.php" target="_blank">Contenido Fichero</a>';    
?>
