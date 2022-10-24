<?php

    echo "El nombre es: " .$_REQUEST['nombre'];
    echo "<br>La contraseña es: " .$_REQUEST['pass'];

    if (isset($_REQUEST['genero'])) {
        echo "<br> El genero es: " .$_REQUEST['genero'];    
    
    } else {
        echo "<br> No ha definido el genero";
    }

    echo "<br>";
    echo "<br> Las asignaturas que has elegido son: ";


    if (isset($_REQUEST['asignaturas'])) {
        
        foreach ($_REQUEST["asignaturas"] as $key => $value) {
            echo "<br>- " . $value;
        }
    
    } else {
        echo "Ninguna";
    }



    echo "<br>";
    echo "<br>";
    print_r($_REQUEST);

    echo "<br>";
    echo "<br>";
    echo "El curso es: " .$_REQUEST['curso'];

    echo "<br>";
    echo "<br>";
    print_r($_REQUEST);
    
    echo "<br>";
    echo "<br>";
    print_r($_FILES);
    echo "<br>";
//  print_r($_SERVER);


    $ubicacion = "/var/www/html/ProyectoDWS/tema3/codigo/Formulario/";
    $nombreTemporal = basename($_FILES['fichero']['name']);
    $ubicacion = $ubicacion.$nombreTemporal;

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)) {
        echo "<br>El fichero se ha subido";
    
    } else {
        echo "<br>Ha fallado";
    }
    

?>
