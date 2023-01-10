<?php

// findAll -> Devuelve Todos
    function findAll() {
        try {
            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $sql = "select * from producto";

            $devuelve = $con -> query($sql);
            $array = $devuelve -> fetchAll(PDO::FETCH_ASSOC);

            unset($con);

            return $array;

        } catch (Exception $ex) {
            print_r($ex);
            unset($con);
            return false;
        }
    
    }


// findById -> Devuelve Uno para el ver
    function findById() {
        try {
            $con = new PDO("mysql:host=".HOST.";dbname=".BBDD,USER,PASS);
            $sql = "select * from producto where codigo = ?";

            $prepare = $con -> prepare($sql);
            $devuelve = $prepare -> execute(array($id));
            
            if ($devuelve) {
                $producto = $prepare -> fetchAll(PDO::FETCH_ASSOC);
                
                unset($con);
                return $producto;

            } else {
                return false;
            }

            unset($con);
            return $array;

        } catch (Exception $ex) {
            print_r($ex);

            unset($con);
            return false;
        }
    }

?>