<?

    function enviado(){
        if (isset($_REQUEST['editar']) || isset($_REQUEST['leer']) || isset($_REQUEST['volver']) || isset($_REQUEST['modificar'])){
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

    function existe($nombre){

        if (isset($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }

?>