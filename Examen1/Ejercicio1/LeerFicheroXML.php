<?php

    function leer($fichero) {

        $dom = new DOMDocument();
        
        $dom -> load($fichero);
        
        
        // Leer el raiz
        $raiz = $dom->childNodes[0];
        
        
        // Recorrer los hijos
        foreach ($raiz->childNodes as $elementos) {
            
            if ($elementos->nodeType == 1) {
        
                foreach ($elementos->childNodes as $datos) {
                    
                    if ($datos->nodeType == 1) {
                        echo "<br><b>" . $datos->nodeName . ":</b> " . $datos->nodeValue;
                    }
                }
            }
        }
    }

?>

