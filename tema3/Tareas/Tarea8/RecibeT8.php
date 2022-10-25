<?php

// NOMBRE
    echo "El nombre es: " .$_REQUEST['nombre'];

// NOMBRE OPCIONAL
    if (isset($_REQUEST['nombreOpcional'])) {
        echo "<br> El nombre opcional es: " .$_REQUEST['nombreOpcional'];    
    } 
    

// APELLIDO
    echo "El apellido es: " .$_REQUEST['apellido'];

// APELLIDO OPCIONAL
    if (isset($_REQUEST['apellidoOpcional'])) {
        echo "<br> El apellido opcional es: " .$_REQUEST['apellidoOpcional'];    
    } 


// FECHA
    echo "El apellido es: " .$_REQUEST['apellido'];

// FECHA OPCIONAL
    if (isset($_REQUEST['fechaOpcional'])) {
        echo "<br> La fecha opcional es: " .$_REQUEST['fechaOpcional'];    
    } 


// RADIO OBLIGATORIO
    if (isset($_REQUEST['opcion'])) {
        echo "<br> La opcion seleccionada es: " .$_REQUEST['opcion'];    
    
    } else {
        echo "<br> No ha seleccionado ninguna opcion";
    }


// SELECT
    echo "<br>";
    echo "<br>";
    echo "La opcion es: " .$_REQUEST['opcion2'];


// CHECKBOX
    echo "<br>";
    echo "<br> Los checks que ha elegido son: ";

    if ( (isset($_REQUEST['checks']) <= 3)  && (isset($_REQUEST['checks']) >= 1) ){
        
        foreach ($_REQUEST["checks"] as $key => $value) {
            echo "<br>- " . $value;
        }
    
    } else {
        echo "Debe elegir al menos 1 elemento o 3 como máximo!!";
    }


// TELEFONO
echo "<br>El teléfono es: " .$_REQUEST['telefono'];

 
// EMAIL
echo "<br>El email es: " .$_REQUEST['email'];


// CONTRASEÑA
    echo "<br>La contraseña es: " .$_REQUEST['pass'];
    

// FICHERO
    echo "<br>";
    echo "<br>";
    print_r($_FILES);
    echo "<br>";

    $ubicacion = "/var/www/html/ProyectoDWS/tema3/Tareas/Tarea8/";
    $nombreTemporal = basename($_FILES['fichero']['name']);
    $ubicacion = $ubicacion.$nombreTemporal;

    if (move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)) {
        echo "<br>El fichero se ha subido";
    
    } else {
        echo "<br>Ha fallado";
    }
    

?>
