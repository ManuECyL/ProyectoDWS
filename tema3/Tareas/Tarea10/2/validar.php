<?php

    function enviado(){

        if (isset($_REQUEST['guardar'])){
            return true;
        }

        return false;
    }

 

    function vacio($dato){

        if (empty($_REQUEST[$dato])) {
            return true;

        } else {
            return false;
        }
    }

?>

