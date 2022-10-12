<link rel="stylesheet" href="../weebroot/css/estilos.css">

<h1>Ejercicio 3</h1>

<h3>Crea una página en la que se le pase como parámetros en la URL (ano, mes y día) y muestre 
    el día de la semana de dicho día. (Por defecto, dale el valor de 12/09/2022)</h3>

<?php
    $fecha = new DateTime($_GET['fecha']);

    echo $fecha -> format('l');
?>

<h3>Enlace Para ver contenido de fichero</h3>
<?php
    echo '<a href="http://192.168.1.58/ProyectoDWS/tema2/Tareas/Tarea2/Ejercicio3/contenido.php" target="_blank">Contenido Fichero</a>';    
?>