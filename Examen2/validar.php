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

            if ($cont >= 1) {
                return true;
            }
        }       
        return false;
    }


    function validacionMostrar(){

        if (!vacio('nombre') && preg_match($patron, $_REQUEST["nombre"])){

            if (!vacio('expediente') && preg_match($patron, $_REQUEST["expediente"])) {

                if ($_REQUEST['curso'] != "0") {
                    return true;
                }
            }
        }

        return false;
    }



    function validacionEnviar(){

        if (!vacio('nombre') && preg_match($patron, $_REQUEST["nombre"])){

            if (!vacio('expediente') && preg_match($patron, $_REQUEST["expediente"])) {

                if ($_REQUEST['curso'] != "0") {

                    if (!existe('asignarturas')) {
                        return true;
                    }
                }
            }
        }
        

        return false;
    }




?>