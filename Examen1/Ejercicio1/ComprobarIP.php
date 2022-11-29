<?php

function comprobarIP($ip, $fecha, $fichero) {

    $dom = new DOMDocument();

    $dom -> load($fichero);

    $Conexiones = $dom -> getElementsByTagName('IP');

    foreach ($Conexiones as $Conexion) {

        if($Conexion->nodeValue == $ip){

            $veces = (int)$Conexion -> nextElementSibling -> nodeValue;
            $Conexion -> nextElementSibling -> nodeValue = $veces + 1;

            $Conexion -> nextElementSibling -> nextElementSibling -> nodeValue = $fecha;

            $dom -> save($fichero);

            return true;
        }
    }

    return false;
}


function anadirIP($ip, $fecha, $fichero) {

    $dom = new DOMDocument();
    
    $dom -> load($fichero);

    $raiz = $dom -> childNodes[0];

    // Datos 
    $conexion = $raiz -> appendChild($dom -> createElement("Conexion"));
    $conexion -> appendChild($dom -> createElement("IP",$ip));
    $conexion -> appendChild($dom -> createElement("Veces","1"));
    $conexion -> appendChild($dom -> createElement("Fecha",$fecha));
    
    
    // Guardamos el dom en un documento
    if ($dom -> save($fichero)) {
        echo "Guardado Correctamente<br>";
    
    } else {
        echo "Error al guardar el fichero";
    }
}
