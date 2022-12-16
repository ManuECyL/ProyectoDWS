<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Leer Tabla</title>
    </head>

    <body>

        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Unidades</th>
                <th>Fecha Caducidad</th>
            </tr>   

            <?php
                require('conexionBD.php');

                try {
                    
                    $conexion= mysqli_connect($_SERVER['SERVER_ADDR'],USER,PASS,BBDD);
                    
                    $sql = 'select * from productos';
                    $resultado = mysqli_query($conexion,$sql);

                    while($fila = $resultado -> fetch_array()){
                        echo "<tr>";
                        echo "<td>". $fila['id'] . "</td> ";
                        echo "<td>". $fila['nombre'] . "</td> ";
                        echo "<td>". $fila['precio'] . "</td> ";
                        echo "<td>". $fila['unidades'] . "</td> ";
                        echo "<td>". $fila['f_caducidad'] . "</td> ";
                        echo "<td>";
                        echo "<a href='modificar.php?sentencia=eliminar&key=". $fila['id'] . "'>ELIMINAR</a>";
                        echo "<a href='modificar.php?sentencia=modificar&key=". $fila['id'] . "'>MODIFICAR</a>";
                        echo "</td>";
                        echo "</tr>";
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

        </table>

        <br><br>

        <a href='modificar.php?sentencia=insertar'>Insertar Registro</a>

    </body>
</html>