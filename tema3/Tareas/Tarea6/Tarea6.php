<html lang="es">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 6</title>

        <link rel="stylesheet" href="weebroot/css/estilos.css">

    </head>

    <body>
        <header>
            <h1>Liga de Campeones</h1>
        </header>

        <br>

        <?php
            $liga =
                array(
                    "Zamora" =>  array(
                        "Salamanca" => array(
                            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Avila" => array(
                            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Valladolid" => array(
                            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 1
                        )
                    ),
                    "Salamanca" =>  array(
                        "Zamora" => array(
                            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Avila" => array(
                            "Resultado" => "4-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Valladolid" => array(
                            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 2, "Penalti" => 1
                        )
                    ),
                    "Avila" =>  array(
                        "Zamora" => array(
                            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 2
                        ),
                        "Salamanca" => array(
                            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 3, "Penalti" => 0
                        ),
                        "Valladolid" => array(
                            "Resultado" => "1-3", "Roja" => 1, "Amarilla" => 0, "Penalti" => 1
                        )
                    ),
                    "Valladolid" =>  array(
                        "Zamora" => array(
                            "Resultado" => "3-2", "Roja" => 1, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Salamanca" => array(
                            "Resultado" => "3-1", "Roja" => 0, "Amarilla" => 0, "Penalti" => 0
                        ),
                        "Avila" => array(
                            "Resultado" => "1-2", "Roja" => 1, "Amarilla" => 1, "Penalti" => 2
                        )
                    ),
                );

            $locales = array();

        ?>

        <table>
            <tr>
                <th>EQUIPOS</th>

                <?php
                    foreach ($liga as $visitante => $value) {
                        echo "<th>" . $visitante . "</th>";
                        array_push($locales, $visitante);
                    }
                ?>
            </tr>

            <tr>
                <?php
                    $index = 0;

                    // Recorrer Array Multidimensional
                    foreach ($liga as $visitante => $valor) {
                        echo "<tr><td><strong> $visitante </strong></td>";
                        $index = 0;
                    

                        foreach ($valor as $equipo => $resultado) {
                        
                            $cont = 0;

                            if ($visitante == $locales[$index]) {
                                echo "<td> </td>";
                            }

                            echo "<td>";
                            foreach ($resultado as $marcador) {
                                
                                if ($cont == 0){
                                    echo "<span id = verde>" . $marcador . "</span>";
                                    echo "<br>";

                                } else if($cont == 1) {
                                    echo "<span id = rojo>" . $marcador . " </span>";
                                
                                } else if($cont == 2) {
                                    echo "<span id = amarillo>" . $marcador . " </span>";
                                
                                } else if($cont == 3) {
                                    echo "<span id = naranja>" . $marcador . " </span>";
                                
                                }
                                
                                $cont ++;
                            }
                            echo "</td>";

                            $index ++;
                        }

                        echo "</tr>";
                    }
                ?>
            </tr>
        </table>

        <br>

        <!-- TABLA CLASIFICACIÓN -->
        <table>
            <tr>
                <th>EQUIPOS</th>
                <th>Puntos</th>
                <th>Goles a Favor</th>
                <th>Goles en Contra</th>
            </tr>
                <?php
                    $clasificacion = array(
                        "Zamora" => array(
                            "Puntos" => "0", "GF" => 0, "GC" => "0"
                        ),
                        "Salamanca" => array(
                            "Puntos" => "0", "GF" => 0, "GC" => "0"
                        ),
                        "Avila" => array(
                            "Puntos" => "0", "GF" => 0, "GC" => "0"
                        ),
                        "Valladolid" => array(
                            "Puntos" => "0", "GF" => 0, "GC" => "0"
                        ),
                    );

                    foreach($liga as $key => $valor){ 
                        
                        foreach($valor as $equipo => $resultado){
                            list($local, $visitante) = explode("-", $resultado["Resultado"]);

                            if($local > $visitante){
                                $clasificacion[$key]["Puntos"] += 3;

                            } else if($local == $visitante){
                                $clasificacion[$key]["Puntos"] += 1;
                                $clasificacion[$equipo]["Puntos"] += 1;

                            } else {
                                $clasificacion[$equipo]["Puntos"] += 3;
                            }

                            $clasificacion[$key]["GF"] += $local;
                            $clasificacion[$key]["GC"] += $visitante;
                            
                            $clasificacion[$equipo]["GC"] += $local;
                            $clasificacion[$equipo]["GF"] += $visitante;
                        }

                    }

                    foreach($clasificacion as $key => $valor){
                        echo "<tr><td><strong> $key </strong></td>";

                        foreach($valor as $clave => $resultado){
                            echo "<td>$resultado</td>";
                        }
                        echo "</tr>";
                    }

                ?>
            </tr>
            
            <?php

            ?>
        </table>

    </body>
</html>



