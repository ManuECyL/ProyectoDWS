<?php

function existe($nombre){

    if (isset($_REQUEST[$nombre])) {
        return true;
    }

        return false;
}

?>