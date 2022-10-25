<?
    function vacio($nombre) {
        if (empty($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }


    function enviado() {
        if (isset($_REQUEST['enviar'])) {
            return true;
        }

        return false;
    }


    function existe($nombre) {
        if (isset($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }


    function checks($nombre) {
        $cont = 0;

        if (isset($_REQUEST[$nombre])) {
            
            $cont = count($_REQUEST[$nombre]); 

            if ($cont >= 1 && $cont <= 3) {
                return true;
            }
        }       
        return false;
    }
?>