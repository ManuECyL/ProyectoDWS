<?php
// Array numérico
$meses =  array();
echo var_dump($meses);

// Crearlo con datos
$meses = array("Enero", "Febrero", "Marzo");
echo "<pre>";
echo var_dump($meses);
echo "</pre>";

// Crear un array con una longitud
$diaSemana = array(7);
echo "<pre>";
echo var_dump($diaSemana);
echo "</pre>";

// Sintaxis corta
$notas = [2, 3, 5, 3];
echo "<pre>";
echo var_dump($notas);
echo "</pre>";

// Acceder o Modificar
echo $meses[2];


// Contar el número de elementos de un array
echo "<br>";
echo count($meses);
echo "<br>";

for ($i=0; $i < count($meses); $i++) { 
    echo "<br>";
    echo $meses[$i];
}

echo "<br>";

// Asignar nuevos valores al array
$meses[3] = "Abril";

for ($i=0; $i < count($meses); $i++) { 
    echo "<br>";
    echo $meses[$i];
}

// Causar errores al no introducir un valor en la posición 4
$meses[5] = "Junio";
$meses[6] = "Julio";
echo "<pre>";
echo var_dump($meses);
echo "</pre>";
echo count($meses);

for ($i=0; $i < count($meses); $i++) { 
    echo "<br>";
    echo $meses[$i];
}

echo "<br>";
echo "<br>";

// Recorrer array con foreach para evitar el error al encontrarse una posición del array vacia
foreach ($meses as $key) {
    echo $key;
    echo "<br>";
}

echo "<br>";

// Añade el valor Agosto en la última posición del array
array_push($meses, "Agosto");
foreach ($meses as $key) {
    echo $key;
    echo "<br>";
}

echo "<br>";

// Quitar el último valor del array -> Agosto
array_pop($meses);
foreach ($meses as $key) {
    echo $key;
    echo "<br>";
}

echo "<br>";

// Quitar un valor específico del array
unset($meses[0]);
echo "<pre>";
echo var_dump($meses);
echo "</pre>";

echo "<br>";

// Mostrar array de otra forma
print_r($meses);

echo "<br>";

// Array con clave valor
$notas = array("Cristian"=>7, "Lucia"=>10, "Itziar"=>10);
print_r($notas);

echo "<br> Nota ". $notas["Lucia"];

echo "<br>";

// El foreach de esta forma guarda la clave en key y el valor en value
foreach ($notas as $key => $value) {
    echo "<br> La Nota de ".$key." es ".$value;
}

echo "<br>";

// Por defecto coge siempre el valor. Para evitarlo se utiliza el => del foreach anterior
foreach ($notas as $value) {
    echo "<br> Las Notas son ".$value;
}

echo "<br>";
echo "<br>";

// Array Multidimensionales
echo "<h1>Array Multidimensionales</h1>";
$multi = array(array(), array());
echo var_dump($multi);

$asignaturas = array(
    "DAM" => array("PROG"=> "Programación", "LM"=> "Lenguaje de Marcas"),
    "DAM2" => array("DWES"=> "Servidor", "DWEC"=> "Cliente")
);

// Recorrer Array Multidimensional
foreach ($asignaturas as $key => $value) {
    echo "<br>";
    echo "<br> El curso de " .$key. " cursa las siguientes asignaturas: ";

    foreach ($value as $siglas => $nombre) {
        echo "<br>" .$siglas. ": " .$nombre;
    }
}

echo "<br>";
echo "<br>";

// Funciones
echo "<h1>Funciones</h1>";

$notas = array("Cristian"=>7, "Lucia"=>10, "Itziar"=>10, "Manuel"=>10, "Javier"=>9.5);

// Current
echo "Current " .current($notas). " ";
echo "Ultimo " .end($notas). " ";
reset($notas); // Para ir al primero en el current siguiente
echo "Current " .current($notas). " ";
echo "clave: " .key($notas);

reset($notas);

while ($elemento = each($notas)) {
    print_r($elemento);
}


?>