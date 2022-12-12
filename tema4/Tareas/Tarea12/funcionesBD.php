<?php

    /* Funciones INDEX */ 
    function enviarBBDD(){

        if (isset($_REQUEST['script'])){
            return true;
        }

        return false;
    }


    function anadirBBDD(){
        return file_get_contents('./tienda.sql');
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
?>

