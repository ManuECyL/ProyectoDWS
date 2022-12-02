<?php

require './Seguro/conexion.php';

// Conexión con Funciones

    // $conexion = mysqli_connect(HOST,USER,PASS);

    try {
        $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

        // Consultar la Base de Datos
        $sql = 'select * from equipo';

        $resultado = mysqli_query($conexion, $sql);

        // echo "<br><b>All</b><br>";
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



// Consulta Preparada SELECT
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'select * from equipo where id = ? and nombre = ?';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $id = 1;
    //     $nombre = 'España';
    //     mysqli_stmt_bind_param($consulta_preparada,'is',$id,$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     mysqli_stmt_bind_result($consulta_preparada, $r_id, $r_nombre);
    //     while (mysqli_stmt_fetch($consulta_preparada)) {
    //         echo "<br><b>Id:</b> " . $r_id . ", <b>Nombre:</b> " . $r_nombre;
    //     }

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    // }


// Consulta Preparada INSERT
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'insert into equipo values(?,?)';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $id = 3;
    //     $nombre = 'Japon';
    //     mysqli_stmt_bind_param($consulta_preparada,'is',$id,$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     echo mysqli_stmt_num_rows($consulta_preparada);

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    //     echo " " .$ex -> getMessage();
    // }


// Consulta Preparada UPDATE
    // try {
    //     $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

    //     // Consultar la Base de Datos
    //     $sql = 'update equipo set nombre = ? where nombre = \'Japon\' ';

    //     $consulta_preparada = mysqli_stmt_init($conexion);
    //     mysqli_stmt_prepare($consulta_preparada, $sql);

    //     $nombre = 'China';
    //     mysqli_stmt_bind_param($consulta_preparada,'s',$nombre);
    //     mysqli_stmt_execute($consulta_preparada);

    //     echo mysqli_stmt_num_rows($consulta_preparada);

    //     mysqli_close($conexion);

    // } catch (Exception $ex) {

    //     echo mysqli_connect_errno();
    //     echo mysqli_connect_error();
    //     echo " " .$ex -> getMessage();
    // }



// TRANSACCIONES

    // Consulta Preparada Insert con Transacción
        try {
            $conexion = mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,'mundial');

            // Insertamos 3 equipos y al último le ponemos mal el id
            mysqli_autocommit($conexion, false);
            $sql = 'insert into equipo values(4, \'Alemania\');';
            $sql1 = 'insert into equipo values(5, \'Rusia\');';
            $sql2 = 'insert into equipo values(5, \'Brasil\');';

            echo "<br>";
            mysqli_query($conexion,$sql);
            mysqli_query($conexion,$sql1);
            mysqli_query($conexion,$sql2);
            mysqli_commit($conexion);

        } catch (Exception $ex) {

            echo mysqli_connect_errno();
            echo mysqli_connect_error();
            echo " " .$ex -> getMessage();

            mysqli_rollback($conexion);
        
        } finally {
            mysqli_close($conexion);
        }

?>