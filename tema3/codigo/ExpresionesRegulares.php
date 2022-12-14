<?php

$cadena = 'Hoy hace muy buen día y hay nubes';
$patron = '/hace/';

echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match " . preg_match($patron, $cadena); // El preg_match muestra 1 si es VERDADERO y 0 si es FALSO


// '.' Significa que después de la a puede haber cualquier cosa
$patron = '/ha./'; 

echo "<br>";
echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match " . preg_match($patron, $cadena);


// '\s' Significa que hay un espacio
$patron = '/ha.\s/'; 

echo "<br>";
echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match " . preg_match($patron, $cadena);


// Hoy o Hay
$patron = '/h[o|a]/'; 

echo "<br>";
echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match " . preg_match($patron, $cadena);


$mes = 'Noviembre';
$mes1 = 'Novembera';
$mes2 = 'aNov.';
$patron = '/^Nov[.|ember|iembre]+$/';

echo "<br>";
echo "<br> Cadena: " .$mes. " y patron: " .$patron. " Match " . preg_match($patron, $mes);
echo "<br> Cadena: " .$mes1. " y patron: " .$patron. " Match " . preg_match($patron, $mes1);
echo "<br> Cadena: " .$mes2. " y patron: " .$patron. " Match " . preg_match($patron, $mes2);


// Con el * de 0 a más.  Con la ? de 0 a 1
$patron = "/log[0-9]*.log/"; 
$cadena = 'log.log';
$cadena1 = 'log1.log';
$cadena2 = 'log125.log';

echo "<br>";
echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match " . preg_match($patron, $cadena);
echo "<br> Cadena: " .$cadena1. " y patron: " .$patron. " Match " . preg_match($patron, $cadena1);
echo "<br> Cadena: " .$cadena2. " y patron: " .$patron. " Match " . preg_match($patron, $cadena2);


//IBAN válido -> Páis: 2 letras | 4 Números Entidad | 4 Números Oficina | 2 Números Control | 10 Números Cuenta
$patron = "/^[A-Z]{2}[0-9]{2}(\s)?[0-9]{4}(\s)?[0-9]{4}(\s)?[0-9]{2}(\s)?[0-9]{10}/";
$IBAN1 = 'ES6621000418401234567891';
$IBAN2 = 'ES66 2100 0418 40 1234567891';

echo "<br>";
echo "<br> Cadena: " .$IBAN1. " y patron: " .$patron. " Match " . preg_match($patron, $IBAN1);
echo "<br> Cadena: " .$IBAN2. " y patron: " .$patron. " Match " . preg_match($patron, $IBAN2);


// Númerico entre 0 - 999
$patron = "/^[0-9]{1,3}$/";
$numero1 = '0';
$numero2 = 'a';
$numero3 = '1000';
$numero4 = '236';
echo "<br>";
echo "<br> Cadena: " .$numero1. " y patron: " .$patron. " Match " . preg_match($patron, $numero1);
echo "<br> Cadena: " .$numero2. " y patron: " .$patron. " Match " . preg_match($patron, $numero2);
echo "<br> Cadena: " .$numero3. " y patron: " .$patron. " Match " . preg_match($patron, $numero3);
echo "<br> Cadena: " .$numero4. " y patron: " .$patron. " Match " . preg_match($patron, $numero4);


// \d -> Solo dígitos  y \w -> Solo letras
$patron = "/^\d{1,3}$/";
$numero1 = '0';
$numero2 = 'a';
$numero3 = '1000';
$numero4 = '236';
echo "<br>";
echo "<br> Cadena: " .$numero1. " y patron: " .$patron. " Match " . preg_match($patron, $numero1);
echo "<br> Cadena: " .$numero2. " y patron: " .$patron. " Match " . preg_match($patron, $numero2);
echo "<br> Cadena: " .$numero3. " y patron: " .$patron. " Match " . preg_match($patron, $numero3);
echo "<br> Cadena: " .$numero4. " y patron: " .$patron. " Match " . preg_match($patron, $numero4);


// Etiqueta que puede ser o de apertura o de cierre de html, es decir, un html que haga match con una etiqueta y reconozca que es una etiqueta
//$patron = '/<\/?\D+\d*>/';
$patron = '/<\/?[a-z]+[0-9]?>/';
$cadena = "<html>Dentro de una html</html>
<a>Dentro del enlace</a>
<h1>Dentro de una h1</h1>";

echo "<br>";
echo "<br> Cadena: " .$cadena. " y patron: " .$patron. " Match "
. preg_match($patron, $cadena);

echo "<br>";

echo "<br>Array de coincidencias<br>";
preg_match_all($patron,$cadena,$array);
foreach ($array[0] as $value) {
    echo str_replace('<', '&lt',$value). "<br>";
}

echo "<br>";

$patron = '/<\/?[a-z]+[0-9]?>(.*)<\/?[a-z]+[0-9]?>/';
$cadena = "<html>Dentro de una html</html>
<a>Dentro del enlace</a>
<h1>Dentro de una h1</h1>";

preg_match_all($patron,$cadena,$array);
echo "Dentro de la etiqueta";
echo "<br>";

// Expresiones regulares en arrays
$lista = array('Maria','Criado','25','Zamora','Calle Requejo 25', '492');
$patron = '/^\d{1,3}$/';
$numeros = preg_grep($patron,$lista);
print_r($numeros);

echo "<br>";

$sustituir = 'numero';
$cambiado = preg_replace($patron,$sustituir,$lista); // Reemplaza los valores del array que coincidan con el patron por la variable indicada, en este caso $sustituir.
print_r($cambiado);
?>