<?php

    require './Seguro/conexion.php';


// Conexion 
/* 
    try {
        $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);
        // echo $conexion -> getAttribute(PDO::ATTR_SERVER_INFO);
        // echo $conexion -> getAttribute(PDO::ATTR_CLIENT_VERSION);
        echo "Conexión correcta <br>";
        
        
        $sql = "select * from equipo";
        $resultado = $conexion -> query($sql);
        echo "<br> Numero Equipos: " . $resultado -> rowCount();

        while ($row = $resultado -> fetch(PDO::FETCH_BOTH)) {
            echo "<pre>";
            print_r($row);
            echo "</pre>";
        }

    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);
    
    } finally {
        unset($conexion);
    }
*/


// Conexion con Exec
/*
    try {
        $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);
        echo "Conexión correcta <br>";

    // Insertar un equipo con exec
        $sql = 'insert into equipo values(4, \'Croacia\');';
        $numero = $conexion -> exec($sql);
        // $sql = $conexion -> exec('delete from equipo where id = 4;');
        echo "<br> Se ha insertado " .$numero;

    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);
    
    } finally {
        unset($conexion);
    }
*/


// Conexion Preparada
/*
    try {
        $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);

        echo "Conexión correcta <br>";

        $sql = 'insert into equipo values(?,?);';
        
        $preparada = $conexion -> prepare($sql);
        $id = 5;
        $nombre = "Argentina";
        $preparada -> bindParam(1,$id);
        $preparada -> bindParam(2,$nombre);
        $preparada -> execute();
        
    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);
    
    } finally {
        unset($conexion);
    }
*/

// Conexion Array
/*
try {
    $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);

    echo "Conexión correcta <br>";

    $sql = "insert into equipo values(?,?)";
    
    $preparada = $conexion -> prepare($sql);
    $array = array(6,"China");
    $preparada -> execute($array);
    

} catch (PDOException $ex) {
    echo "Error: ";
    print_r($ex);

} finally {
    unset($conexion);
}
*/


// Conexion Array
/*
    try {
        $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);

        echo "Conexión correcta <br>";

        $sql = "insert into equipo values(:id,:nombre)";
        
        $preparada = $conexion -> prepare($sql);
        $array = array(":id"=>7,":nombre"=>"Japon");
        $preparada -> execute($array);
        
    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);

    } finally {
        unset($conexion);
    }
*/


// Conexion Nombre con Array Asociativo
    try {
        $conexion = new PDO('mysql:host=' . HOST . ';dbname=' . BBDD,USER,PASS);

        echo "Conexión correcta <br>";

        // $sql = "select * from equipo where id = :id";
        $sql = "select * from equipo where nombre like :nombre";
        
        $preparada = $conexion -> prepare($sql);
        // $array = array(":id"=>1);
        $array = array(":nombre" => "%na%");
        $preparada -> execute($array);

    // Insertar en variables
        $preparada -> bindColumn(1,$id);
        $preparada -> bindColumn(2,$nombre);

        while ($row = $preparada -> fetch(PDO::FETCH_BOUND)) {
            echo "<br>" . $id . ": " . $nombre;
        }
        
    } catch (PDOException $ex) {
        echo "Error: ";
        print_r($ex);

    } finally {
        unset($conexion);
    }

?>