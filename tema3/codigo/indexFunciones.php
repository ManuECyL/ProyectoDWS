<h1>Funcion</h1>

<?
    include("./Funciones.php");
    
    saludo();

    echo "<br>";

    saludo2("Manu");

    echo "<br>";

    $nombre = "Manu";
    // No se cambia porque se ha pasado por valor
    saludo3($nombre);
    echo "<br>Cambio de nombre: ".$nombre;


    // Global
    echo "<br>";
    echo "<br>";
    echo "Usando la global";
    echo "<br>";
    saludo4();
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;

    // Que devuelva algo con un return
    $nombre = "Manu";
    echo "<br>";
    echo "<br>";
    echo "Usando return";
    echo "<br>";
    $nombre = saludo5($nombre);
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;

    // Por referencia
    $nombre = "Manu";
    echo "<br>";
    echo "<br>";
    echo "Usando referencia";
    echo "<br>";
    saludo6($nombre);
    echo "<br>";
    echo "Cambio de nombre: ".$nombre;
    

    // Funcion que si no le pasamos valores, use un valor por defecto
    echo "<br>";
    echo "<br>";
    echo "Usando valores por defecto";
    echo "<br>";
    saludo7("Manu");
    echo "<br>";
    saludo7();
    echo "<br>";
    echo "<br>";


    // Pasar un array
    $array = array();
    // Llamar a la funcion que rellene con la hora que se ha hecho la llamada
    // Los arrays se pasan por valor
    rellenaArray($array);
    echo "<br>";
    print_r($array); // Los cambios de la función no se realizan aquí al ser por valor. Para solucionarlo se ha de pasar por referencia.
    
    echo "<br>";
    rellenaArray2($array);
    rellenaArray2($array);
    echo "<br>";
    print_r($array);


    // Objetos
    class Cuadrado {
        public $lado = 5;
    }

    $objeto = new Cuadrado();
    cambioLado($objeto, 6);
    echo "<br>Objeto: " .$objeto->lado;