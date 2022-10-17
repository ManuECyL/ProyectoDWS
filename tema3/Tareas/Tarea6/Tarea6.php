<?php
$equipos = array(
    array('Equipos', 'Zamora', 'Salamanca', 'Avila', 'Valladolid'),
    array('Zamora'),
    array('Salamanca'),
    array('Avila'),
    array('Valladolid'),
);

// Recorrer Array Multidimensional
foreach ($equipos as $key => $value) {

    echo "<br>";
    echo "<br>";

    foreach ($value as $nombre) {
        echo "<strong>" .$nombre. "</strong>\t";
    }
}

?>