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

        $sentencia = $_REQUEST['sentencia'];
            
        // Consulta DELETE
            if ($sentencia == 'eliminar'){

                $clave = $_REQUEST['clave']; 

                try {
                    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);

                    $sql = "delete from productos where id='" . $_REQUEST['key'] . "';";

                    mysqli_query($conexion,$sql);

                    mysqli_close($conexion);

                } catch (Exception $ex) {

                    if ($ex -> getCode() == 1045){
                        echo "Credenciales Incorrectas";
                    }

                    if ($ex -> getCode() == 1049){
                        echo "No Existe la Base de Datos";
                    }       

                    if ($ex -> getCode() == 2002){
                        echo "Tiempo de Conexión Finalizado";
                    }       
                }

                header("Location: ./leerTabla.php");


            } elseif (enviado() && patFecha()) {

            // Consulta UPDATE
                if ($sentencia == 'modificar'){

                    $clave = $_REQUEST['clave']; 

                    try {
                        $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                        
                        $sql = "update productos set nombre='" . $_REQUEST['nombre'] . "',precio='" . $_REQUEST['precio'] . "',unidades='" . $_REQUEST['unidades'] . "',fecha_caducidad='" . $_REQUEST['fecha_caducidad'] . "';" ;
                        
                        mysqli_query($conexion,$sql);
                        
                        mysqli_close($conexion);

                    } catch (Exception $ex) {

                        if ($ex -> getCode() == 1045){
                            echo "Credenciales Incorrectas";
                        }

                        if ($ex -> getCode() == 1049){
                            echo "No Existe la Base de Datos";
                        }       

                        if ($ex -> getCode() == 2002){
                            echo "Tiempo de Conexión Finalizado";
                        }        
                    }

                    header("Location: ./leerTabla.php");

            // Consulta INSERT
                } elseif ($sentencia == 'insertar') {

                    $clave = $_REQUEST['clave']; 

                    try {
                        $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                        
                        $sql="insert into productos values ('" . $_REQUEST['nombre'] . "','" . $_REQUEST['precio'] . "','" . $_REQUEST['unidades'] . "','" . $_REQUEST['fecha_caducidad'] . "');";
                        
                        mysqli_query($conexion,$sql);
                        
                        mysqli_close($conexion);

                    } catch (Exception $ex) {

                        if ($ex -> getCode() == 1045){
                            echo "Credenciales Incorrectas";
                        }
    
                        if ($ex -> getCode() == 1049){
                            echo "No Existe la Base de Datos";
                        }       
    
                        if ($ex -> getCode() == 2002){
                            echo "Tiempo de Conexión Finalizado";
                        }        
                    }

                    header("Location: ./leerTabla.php");
                }
            }
        ?>

        <?
            try {
                    
                $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                
                if ($sentencia == 'modificar'){
                    $clave = $_REQUEST['clave']; 
                    $sql = "select * from productos where id='" . $_REQUEST['key'] . "';";
                    $resultado = mysqli_query($conexion,$sql);

                    while ($fila = $resultado -> fetch_array()){
                        $id = $fila['id'];
                        $nombre = $fila['nombre'];
                        $precio = $fila['precio'];
                        $unidades = $fila['unidades'];
                        $fecha_caducidad = $fila['fecha_caducidad'];
                    }

                }

                mysqli_close($conexion);
        
            } catch (Exception $ex) {
                
                if ($ex -> getCode() == 1045){
                    echo "Credenciales Incorrectas";
                }

                if ($ex -> getCode() == 1049){
                    echo "No Existe la Base de Datos";
                }       

                if ($ex -> getCode() == 2002){
                    echo "Tiempo de Conexión Finalizado";
                }         
            }     
        ?>

        <form action="./modificar.php" method="post">

            <input type="hidden" name="sentencia" value="<?
                echo $sentencia;
            ?>">
            
            <input type="hidden" name="clave" value="<?
                if ($sentencia == 'modificar') {
                    echo $clave;
                }
            ?>">

            <br>
            <br>

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?
                if ($sentencia == 'modificar'){
                    echo $nombre;
                }
            ?>">
            <?php
                if(enviado()){
                    if (vacio('nombre')) {
                        echo "<p style='color: red'>Introduce el nombre del producto</p>";
                    }
                }
            ?>

            <br>
            <br>

            <label for="precio">Precio:</label>
            <input type="number" step="0.1" name="precio" id="precio" value="<?
                if ($sentencia == 'modificar'){
                    echo $precio;
                }
            ?>">
            <?php
                if(enviado()){
                    if (vacio('precio')) {
                        echo "<p style='color: red'>Introduce el precio del producto</p>";
                    }
                }
            ?>

            <br>
            <br>

            <label for="unidades">Unidades:</label>
            <input type="number" name="unidades" id="unidades" value="<?
                if ($sentencia == 'modificar'){
                    echo $unidades;
                }
            ?>">
            <?php
                if(enviado()){
                    if (vacio('unidades')) {
                        echo "<p style='color: red'>Introduce las unidades del producto</p>";
                    }
                }
            ?>

            <br>
            <br>

            <label for="f_caducidad">Fecha de Caducidad:</label>
            <input type="text" name="f_caducidad" id="f_caducidad" value="<?
                if ($sentencia == 'modificar'){
                    echo $f_caducidad;
                }
            ?>">
            <?php
                if(enviado()){
                    if (vacio('f_caducidad')) {
                        echo "<p style='color: red'>Introduce la fecha de caducidad del producto</p>";
                    
                    } else if(!patFecha()) {
                        echo "<p style='color: red'>Introduce la fecha con el formato indicado(aaaa-mm-dd)</p>";
                    }
                }
            ?>

            <br>
            <br>

            <input type="submit" value="Guardar" name="enviado">

        </form>

    </body>

</html>