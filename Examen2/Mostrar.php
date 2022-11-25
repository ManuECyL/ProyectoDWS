<?php
    function mostrarTodo() {
        // NOMBRE
        echo "<strong>Nombre:</strong> " .$_REQUEST['nombre'];

        // EXPEDIENTE
        echo "<br><strong>Expediente:</strong> " .$_REQUEST['fecha'];

        // SELECT
        echo "<br><strong>Curso:</strong> " .$_REQUEST['curso'];    

        // CHECKBOX
        echo "<br>";
        echo "<br><strong>Asignaturas:</strong> ";

        foreach ($_REQUEST["asignaturas"] as $key => $value) {
            echo "<br>- " . $value;
        }
    }
?>