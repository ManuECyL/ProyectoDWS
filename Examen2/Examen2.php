<?php
    require("./validar.php");
    require("./Mostrar.php");
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Examen2</title>

    </head>

    <body>

        <style>
            *,
            input {
                margin: 10px;
            }

            h1 {
                text-align: center;
            }

        </style>

        <h1>Examen 2</h1>

        <h2>Formulario Examen</h2>

        <br>

        <?php

            $array = array(
                "1DAM" => array("ENDE", "BD", "LM", "SI", "FOL"),
                "2DAM" => array("DI", "SGE", "ACDA", "EIE", "PSP"),
                "2DAW" => array("DWES", "DWEC", "DIW", "EIE")
            );

            if(enviado() && validacionEnviar()) {
                // header('Location: ./Mostrar.php?nombre='.  $_REQUEST['nombre'] . '&expediente=' . $_REQUEST['expediente'] . '&curso=' . $_REQUEST['curso'] . "&asignaturas=" . $_REQUEST['asignaturas']);
                header('Location: ./Mostrar.php?nombre='.  $_REQUEST(mostrarTodo()));
                exit();

            } else {


        ?>

            <form action="./Examen2.php" method="post" enctype="multipart/form-data">

                <!-- NOMBRE -->
                <p>
                    <label for="idNombre">Nombre y Apellidos:</label>
                    <input type="text" name="nombre" id="idNombre" placeholder="Nombre" 
                        value="<?php

                            $patron = '/^[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}\s[A-Z]{1}[a-z]{2,}$/';

                            if (enviado() && !vacio("nombre") && preg_match($patron, $_REQUEST["nombre"])) {
                                echo $_REQUEST["nombre"];
                            }
                        ?>">
                    
                    <?php
                        // Comprobar que no este vacío, si lo está pongo un error
                        if (vacio("nombre") && enviado()) {
                            ?>
                                <span style=color:red><-- Debe introducir un nombre!!</span>
                            <?
                        }

                        if (!vacio("nombre") && enviado() && !preg_match($patron, $_REQUEST["nombre"])) {
                            ?>
                                <span style=color:red><-- Formato Incorrecto!!</span>
                            <?
                        }
                    ?>
                </p>
               

                <!-- EXPENDIENTE -->
                <p>
                    <label for="idExpediente">Expediente:</label>
                    <input type="text" name="expediente" id="idExpediente" placeholder="11AAA/22"
                        value="<?php

                            $patron = '/^[0-9]{2}[A-Z]{3}\/[0-9]{2}$/';

                            if (enviado() && !vacio("expediente") && preg_match($patron, $_REQUEST["expediente"])) {
                                echo $_REQUEST["expediente"];
                            }
                        ?>">
                    
                    <?php
                        // Comprobar que no este vacío, si lo está pongo un error
                        if (vacio("expediente") && enviado()) {
                            ?>
                                <span style=color:red><-- Debe escribir un expediente!!</span>
                            <?
                        }

                        if (!vacio("expediente") && enviado() && !preg_match($patron, $_REQUEST["expediente"])) {
                            ?>
                                <span style=color:red><-- Formato Incorrecto!!</span>
                            <?
                        }
                    ?>
                </p>

                <!-- COMBOBOX -->
                <p><b>Curso:</b>
                    <select name="curso" id="idCurso">
                            <option value="0">Seleccione</option>

                            <?php
                                foreach ($array as $key => $valor) {
                                    echo "<option value='" . $key . "'>" . $key . "</option>";
                                }

                            ?>
                    </select>

                    <?php
                        // Comprobar que no este vacío, si lo está pongo un error
                        if (existe("curso") && $_REQUEST['curso'] == "0" && enviado()) {
                            ?>
                                <span style=color:red><-- Debe elegir un curso!!</span>
                            <?
                        }
                    ?>

                    <input type="hidden" name="curso" value="<?php 
                        if (enviado()) {
                            $_REQUEST['curso'];
                        }

                    ?>">   
                </p>




                <!-- CHECKBOX -->
                <p><b>Asignaturas:</b>

                        <?php
                            if (validacionMostrar()){
                                echo "<p>Asignaturas:</p>";

                                foreach ($array as $key => $valor) {
                                    
                                    foreach ($valor as $key => $value) {
                                        echo "<label>" . $value . "</label>";
                                        echo "<input type='checkbox' name='asignaturas' id='idAsignaturas'>" .$value;
                                    }
                                }
                            }

                        ?>
     
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (!existe("checks") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe elegir al menos 1 elemento!!</span>
                                <?
                            
                            } else if (existe("checks") && !checks("checks") && enviado()) {
                                ?>
                                <span style=color:red><-- Debe elegir entre 1 y 3 elementos!!</span>
                                <?
                            }
                                
                            
                        ?>
                    </p>

               

                <br>

                <input type="hidden" name="curso" value="">
                <br>
                <input type="submit" value="Enviar" name="enviar" style=width:170px>

            </form>
            
            <?php

                }
            ?>      
    </body>
</html>