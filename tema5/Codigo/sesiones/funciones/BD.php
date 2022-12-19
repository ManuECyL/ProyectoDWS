<?php

require '../seguro/conexion.php';

function validaUser($user, $pass) {

    try {
        $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
        $sql = "select * from usuarios where usuario = ? and clave = ?";
        $sql_p = $con -> prepare($sql);
        $pass_e = sha1($pass);
        $array = array($user,$pass_e);
        $sql_p -> execute();

    // Si devuelve algo, hacemos el login
        if ($sql_p -> rowCount() == 1) {
            session_start();
            $_SESSION['validado'] = true;
            $row = $sql_p -> fetch();
            $_SESSION['user'] = $user;
            $_SESSION['nombre'] = $row['nombre'];
            $_SESSION['perfil'] = $row['perfil'];
            unset($con);
            return true;
        
    // Sino, no se puede hacer login
        } else {
            unset($con);
            return false;
        }


    } catch (Exception $ex) {
        print_r($ex);
        unset($con);
    }

}