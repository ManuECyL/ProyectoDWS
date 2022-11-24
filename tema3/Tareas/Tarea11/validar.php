<?

    function enviado(){
        if (isset($_REQUEST['guardar'])){
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