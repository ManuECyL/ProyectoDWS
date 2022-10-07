<?php
    include_once("./header.html"); // Por mucho que repitas el include, al usar include_once solo se va a cargar una vez en la página.
    include_once("./header.html");
    include_once("./header.html");
    //include("./header.html");
    //require("./header.html");
?>


<h2>Valor y Referencia</h2>

<?php
    $var = 1;
    $var1 = $var; 
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 = $var1 + 1;
    echo $var . "<br>";
    echo $var1 . "<br>";

    $var = 1;
    $var1 = &$var; 
    echo $var . "<br>";
    echo $var1 . "<br>";
    $var1 = $var1 + 1;
    echo $var . "<br>";
    echo $var1 . "<br>";
?>


<h2>Ambito de las variables</h2>

<?php

$global = 1;

function cambio() {
    $global = 2;
    echo "El valor de la variable dentro de la función es " .$global;
}

cambio();
echo "<br>El valor de la variable es " .$global;

// Vamos a intentar usar la misma variable
$global = 1;

function cambio2() {
    //  $local = $global; // Aunque la variable sea global, dentro de la función no podemos acceder a la variable, porque no funciona dentro de ese ámbito.
    global $global;
    $local = $global;
    echo "<br>El valor de la variable dentro de la función es " .$local;
}

cambio2();
echo "<br>El valor de la variable es " .$global;


// Crear variables de función
function crearCoches() {
    static $numeroVecesCreada = 0; // El static solo lo lee la primera vez, es decir, cuando se crea. Si se vuelve a llamar a la función comienza por la siguiente línea.
    $numeroVecesCreada = $numeroVecesCreada + 1;
    echo "<br>Ha sido creado un coche";
    echo "<br>Llevo creados " .$numeroVecesCreada. " coches";
}

crearCoches();
crearCoches(); 

include("./constantes.php");
echo "<br>Al usuario " .USER. " le gusta el numero " .PI;
// USER = "manu";  // No es posible modificar la constante que pertenece a otro fichero. 

echo "<pre>";
// Al final de la URL escribir ?clave=valor para que salga algún dato en determinados arrays.
var_dump($_SERVER);
var_dump($_GET);
var_dump($_POST);
var_dump($_REQUEST);
var_dump($_COOKIE);
var_dump($_ENV);
var_dump(getenv());
var_dump($_FILES);
session_start();
var_dump($_SESSION);
echo "</pre>";

?>