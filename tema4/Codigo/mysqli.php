<?php

require './Seguro/conexion.php';

// Conexión con Funciones

    // $conexion = mysqli_connect(HOST,USER,PASS);
try {
    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    // Consultar la Base de Datos
    $sql = 'select * from equipo';

    $resultado = mysqli_query($conexion, $sql);

    echo "<br><b>All</b><br>";
    //print_r($resultado -> fetch_all());

    echo "<br><br><b>Array</b><br>";
    // print_r($resultado -> fetch_array());
    // print_r($resultado -> fetch_array());
    // print_r($resultado -> fetch_array());
    while ($row = $resultado -> fetch_array()) {
        print_r($row);
        echo "<br>";
    }

    mysqli_close($conexion);


} catch (Exception $ex) {

    echo mysqli_connect_errno();
    echo mysqli_connect_error();
    
    // if ($ex -> getCode() == 1045) {
    //     echo $ex;
    //     echo "<br>Error al configurar el usuario";
    // }
    
    // if ($ex -> getCode() == 2002) {
    //     echo $ex;
    //     echo "<br>Error al configurar el host";
    // }
}

echo "";



// Conexión con Objetos

// try {
//     $conexion0 = new mysqli();
//     $conexion0 -> connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    // Consultar la Base de Datos
    // $sql = 'select * from equipo';

    // $resultado = mysqli_query($conexion, $sql);

    // echo "<br><br><b>Array</b><br>";
    // while ($row = $resultado -> fetch_object()) {
    //     print_r($row);
    //     echo "<br>";
    // }

//     mysqli_close($conexion0);

// } catch (Exception $ex) {

//     echo $conexion0 -> connect_errno;
//     echo $conexion0 -> connect_error;
    
// }



// Consultas Preparadas
try {
    $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    // Consultar la Base de Datos
    $sql = 'select * from equipo where id = ? and nombre = ?';

    $consulta_preparada = mysqli_stmt_init($conexion);
    mysqli_stmt_prepare($consulta_preparada, $sql);

    $id = 1;
    $nombre = 'España';
    mysqli_stmt_bind_param($consulta_preparada,'i',$id);
    mysqli_stmt_bind_param($consulta_preparada,'s',$nombre);

    mysqli_stmt_execute($consulta_preparada);

    mysqli_close($conexion);

} catch (Exception $ex) {

    echo mysqli_connect_errno();
    echo mysqli_connect_error();
}


?>