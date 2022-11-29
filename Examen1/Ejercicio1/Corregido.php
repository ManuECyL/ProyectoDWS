<?php

require './LeerFicheroXML.php';
require './ComprobarIP.php';


$fichero = "examen1Corregido.xml";

// Obtenemos la IP del Cliente
$ip = $_SERVER['REMOTE_ADDR'];


// Obtenemos la fecha de acceso con un formato específico
$fecha = date(DATE_RFC2822);

if (file_exists($fichero)) {
    
    if(!comprobarIP($ip, $fecha, $fichero)) {
        anadirIP($ip, $fecha, $fichero);
    }

    
} else {
    $dom = new DOMDocument("1.0","utf-8");
    
    $dom -> formatOutput = true;

    $raiz = $dom -> createElement("Conexiones");
    $dom -> appendChild($raiz);

    // Guardamos el dom en un documento
    $dom -> save($fichero);

    anadirIP($ip, $fecha, $fichero);
}

    
leer($fichero);

?>