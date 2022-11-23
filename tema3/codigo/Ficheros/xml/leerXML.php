<?php

    $dom = new DOMDocument();

    $dom -> load('departamento.xml');

    echo "Fichero<br>";

    // Leer el raiz
    $raiz = $dom->childNodes[0];
    echo "Raiz: " .$raiz->nodeName;
    echo "<br>";

    // Número de hijos de la raíz
    echo "Tiene " . $raiz->childNodes->length . " hijos contando los textos";

    // Recorrer los hijos
    foreach ($raiz->childNodes as $elementos) {
        
        if ($elementos->nodeType == 1) {
            echo "<br> Un hijo que es: " . $elementos->nodeName;

            foreach ($elementos->childNodes as $datos) {
                
                if ($datos->nodeType == 1) {
                    echo "<br>&nbsp;&nbsp; Un hijo que es: " . $datos->nodeName . " y valor: " . $datos->nodeValue;
                }
            }
        }
    }

?>