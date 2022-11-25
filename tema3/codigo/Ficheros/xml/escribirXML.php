<?php

// Creamos el Elemento Principal y lo añadimos al documento .xml
$raiz = $dom->createElement("Mundial");
$dom->appendChild($raiz);

// Elementos equipo
$equipo = $dom->createElement("Equipo");
    // Otra forma de hacerlo -> $equipo = $raiz->appendChild($dom->createElement("Equipo"));
$raiz->appendChild($equipo);

// Datos del Equipo
$equipo->appendChild($dom->createElement("Nombre","España"));
$equipo->appendChild($dom->createElement("Entrenador","Luis Enrique"));

// Otro Equipo
$equipo = $raiz->appendChild($dom->createElement("Equipo"));
$equipo->appendChild($dom->createElement("Nombre","Francia"));
$equipo->appendChild($dom->createElement("Entrenador","Pepe"));


// Guardamos el dom en un documento
if ($dom->save('mundial.xml')) {
    echo "Todo correcto";

} else {
    echo "Error";
}




?>