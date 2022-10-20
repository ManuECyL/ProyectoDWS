<?php

    // PARTE 1

    function br() {
        echo "<br>";
    }

    function h1($cadena) {
        echo "<h1>".$cadena."</h1>";
    }

    function p($parrafo) {
        echo "<p>".$parrafo."</p>";
    }

    function self() {
        echo basename(__FILE__);
    }

    function letraDni($DNI) {
        $valor= (int) ($DNI / 23);

        $valor *= 23;

        $valor= $DNI - $valor;

        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";

        $letraNif= substr ($letras, $valor, 1);

        echo "La letra del DNI: ".$DNI. " es -> ".$letraNif;
    }


    // PARTE 2

    function aleatorios($array, $min, $max, $num, $repetir) {

        $array = array();

        foreach ($num as $key => $value) {
            
        }

    }