<?
    function vacio($nombre) {

        if (empty($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }
?>