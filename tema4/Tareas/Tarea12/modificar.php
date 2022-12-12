<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Modificar tabla</title>
        
    </head>

    <body>
        <?
            require('funcionesBD.php');
            require('conexionBD.php');
            
        // Consulta DELETE
            if ($_REQUEST['sentencia'] == 'eliminar'){

                try {
                    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);

                    $sql = "delete from productos where nombre='" . $_REQUEST['key'] . "';";

                    mysqli_query($conexion,$sql);

                    mysqli_close($conexion);

                } catch (Exception $ex) {

                    if ($ex -> getCode() == 1045){
                        echo "Credenciales incorrectas";
                    }

                    if ($ex -> getCode() == 1049){
                        echo "No existe la base de datos";
                    }       

                    if ($ex -> getCode() == 2002){
                        echo "Tiempo de conexión finalizado";
                    }       
                }

                header("Location: ./leerTabla.php");


            } elseif (enviado()) {

            // Consulta UPDATE
                if ( $_REQUEST['sentencia'] == 'modificar'){

                    try {
                        $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                        
                        $sql = "update productos set nombre='" . $_REQUEST['nombre'] . "',precio='" . $_REQUEST['precio'] . "',unidades='" . $_REQUEST['unidades'] . "',fecha_caducidad='" . $_REQUEST['fecha_caducidad'] . "';" ;
                        
                        mysqli_query($conexion,$sql);
                        
                        mysqli_close($conexion);

                    } catch (Exception $ex) {

                        if ($ex -> getCode() == 1045){
                            echo "Credenciales incorrectas";
                        }

                        if ($ex -> getCode() == 1049){
                            echo "No existe la base de datos";
                        }       

                        if ($ex -> getCode() == 2002){
                            echo "Tiempo de conexión finalizado";
                        }        
                    }

                    header("Location: ./leerTabla.php");

            // Consulta INSERT
                } elseif ($_REQUEST['sentencia'] == 'insertar') {

                    try {
                        $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                        
                        $sql="insert into productos values ('" . $_REQUEST['nombre'] . "','" . $_REQUEST['precio'] . "','" . $_REQUEST['unidades'] . "','" . $_REQUEST['fecha_caducidad'] . "');";
                        
                        mysqli_query($conexion,$sql);
                        
                        mysqli_close($conexion);

                    } catch (Exception $ex) {

                        if ($ex -> getCode() == 1045){
                            echo "Credenciales incorrectas";
                        }
    
                        if ($ex -> getCode() == 1049){
                            echo "No existe la base de datos";
                        }       
    
                        if ($ex -> getCode() == 2002){
                            echo "Tiempo de conexión finalizado";
                        }        
                    }

                    header("Location: ./leerTabla.php");
                }
            }
        ?>

        <?
            try {
                    
                $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                
                if ($_REQUEST['sentencia'] == 'modificar'){

                    $sql = "select * from productos where nombre='" . $_REQUEST['key'] . "';";
                    $resultado = mysqli_query($conexion,$sql);

                }
                    mysqli_close($conexion);
        
            } catch (Exception $ex) {
                
                if ($ex -> getCode() == 1045){
                    echo "Credenciales incorrectas";
                }

                if ($ex -> getCode() == 1049){
                    echo "No existe la base de datos";
                }       

                if ($ex -> getCode() == 2002){
                    echo "Acabado tiempo de conexión";
                }         
            }     
        ?>

        <form action="./modificar.php" method="post">
            
            <input type="submit" value="Guardar" name="enviado">

        </form>

    </body>

</html>