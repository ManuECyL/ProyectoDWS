<?php
    require("./funcionesC.php");
?>

<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Examen2 Corregido</title>

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

            $primera = false;
            $primera = primeraValidacion();

            if ($primera && isset($_REQUEST["curso"])) {
                header('Location: ./mostrar.php?nombre='.$_REQUEST["nombre"]."&expediente".$_REQUEST["exp"]."&curso".$_REQUEST["curso"]."&asignaturas".implode(',', $_REQUEST["asignaturas"]));
            }
        ?>

        <form action="./Corregido2.php" method="post" enctype="multipart/form-data">

        <!-- NOMBRE -->
        <p>
        <label for="nombre">Nombre y apellidos:</label> <input type="text" name="nombre" id="nombre" 
            <? if ($primera) {
                    echo "readonly ";
                } 
            ?> 
        value="<?php
        
        ?>">

        <?php
            if (enviado() && vacio("nombre")) {
                ?>
                    <span style="color:red;">El nombre esta vacio</span>

                <?php
            }
        ?>

        <?php
            if (enviado() && !vacio("nombre")) {

                if (!compNombre()) {
                ?>
                    <span style="color:red;">El nombre debe ser valido</span>

                <?php
                }
            }
        ?>

        <!-- EXPEDIENTE -->
        <br> <label for="exp">Expediente</label> <input type="text" name="exp" id="exp"
            <? if ($primera) {
                    echo "readonly ";
                } 
            ?> 
        value="<?php

        ?>">

        <?php
            if (enviado() && vacio("exp")) {
                ?>
                    <span style="color:red;">El expediente esta vacio</span>

                <?php
            }
        ?>

        <?php
            if (enviado() && !vacio("exp")) {
                if (!compExp()) {
                ?>
                    <span style="color:red;">El expediente debe ser valido</span>

                <?php
                }
            }
        ?>

        <!-- CURSO -->
        <br> <label for="curso">Curso:</label> 
        <select name="curso" id="curso"            
            <? if ($primera) {
                    echo "disabled ";
                } 
            ?>>
            <option value="no">Selecione una opcion</option>

            <?php
                rellenar($array);
            ?>

        </select>
        <input type="hidden" name="curso2" value="">
            
            <?php
                if (primeraValidacion()) {
                    rellenarCheck($array);

                    if (enviado() && !isset($_REQUEST["curso"])) {
                        ?>
                            <span style="color:red;">Debe seleccionar una asignatura</span>
                        <?php
                    }

                    echo "<input type='hidden' name='curso' value='".$_REQUEST["curso"] ."'>";
                }
            ?>

        <br><input type="submit" name="Enviado" value="Enviar">
   