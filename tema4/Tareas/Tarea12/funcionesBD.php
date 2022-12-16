<?php

    /* Funciones INDEX */ 
    function enviar(){

        if (isset($_REQUEST['script'])){
            return true;
        }

        return false;
    }


    function anadir(){
        return file_get_contents('./tienda.sql');
    }


    function vacio($nombre){

        if (empty($_REQUEST[$nombre])) {
            return true;

        } else {
            return false;
        }
    }


    /* Funciones CRUD */
    function existe($nombre){

        if (isset($_REQUEST[$nombre])){
            return true;
        }

        return false;
    }


    function enviado(){

        if (isset($_REQUEST['enviado'])){
            return true;
        }

        return false;
    }

    function patFecha(){

        $patron='/^([0-9]{1,4})-(1[0-2]?|[1-9])-([0-2]?[0-9]|3[0-1])$/';

        if (preg_match($patron, $_REQUEST['f_caducidad']) == 1){
            return true;
        } 

        return false;
    }
?>

