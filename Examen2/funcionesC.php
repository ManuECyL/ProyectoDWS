<?php

    function compNombre() {

        $patron = '/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$/';

        if (preg_match($patron, $_REQUEST["nombre"])) {
            return true;
        }

        return false;
    }


    function compExp() {

        $patron = '/^[0-9]{2}[A-Z]{3}\/[0-9]{2}$/';

        if (preg_match($patron, $_REQUEST["exp"])) {
            return true;
        }

        return false;
    }


    function rellenar($array) {

        foreach ($array as $elemento => $value) {
            echo "<option "; 
            
            if (enviado() && $elemento == $_REQUEST["curso"]) {
                echo "selected ";
            }

            echo "value='" . $elemento . "'>" . $elemento . "</option>";
        }
    }


    function rellenarCheck($array) {

        foreach ($array as $elemento => $valor) {

            if ($elemento == $_REQUEST["curso"]) {

                foreach ($elemento as $value) {
                    echo "<input type='checkbox' name='checks[]' id='". $value ."value='". $value ."'>";
                    echo "<label for='". $value ."'>" . $value ."</label>"; 
                }
            }
        }
    }


    function primeraValidacion() {
        
        if (enviado()) {

            if (!vacio('nombre') && compNombre()) {
                
                if (!vacio('exp') && compExp()) {
                    
                    if ($_REQUEST['curso'] != "no") {
                        return true;
                    }
                }
            }
        }
    }


    function enviado() {
        
        if (isset($_REQUEST['Enviado'])) {
            return true;    
        }

        return false;
    }


    function vacio($nombre) {

        if (empty($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }
?>