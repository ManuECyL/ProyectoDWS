<?php
    require("./validarFormularioFunciones.php");
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario</title>
    </head>

    <body>
        <!-- <form action="./Recibe.php" method="post" enctype="multipart/form-data"> target="_blank" -->
        <form action="./Formulario.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="idNombre">Nombre</label>
                <input type="text" name="nombre" id="idNombre" placeholder="Nombre" 
                    value="<?php
                        if (enviado() && !vacio("nombre")) {
                            echo $_REQUEST["nombre"];
                        }
                    ?>">
                
                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (vacio("nombre") && enviado()) {
                        ?>
                            <span style=color:red>Debe rellenar el nombre</span>
                        <?
                    }
                ?>
            </p>

            <p>
                <label for="idPass">Contraseña</label>
                <input type="password" name="pass" id="idPass" 
                    value="<?php
                        if (enviado() && !vacio("pass")) {
                            echo $_REQUEST["pass"];
                        }                    
                    ?>">

                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (vacio("pass") && enviado()) {
                        ?>
                            <span style=color:red>Debe rellenar la contraseña</span>
                        <?
                    }
                ?>
            </p>

            <p><b>Genero</b>
                <label for="idMasculino">Masculino</label>
                <input type="radio" name="genero" id="idMasculino" value="masculino"
                    <?php
                        if (enviado() && existe("genero") && $_REQUEST["genero"] == "masculino") {
                            echo "checked";
                        }
                    ?>
                >

                <label for="idFemenino">Femenino</label>
                <input type="radio" name="genero" id="idFemenino" value="femenino"
                    <?php
                        if (enviado() && existe("genero") && $_REQUEST["genero"] == "femenino") {
                            echo "checked";
                        }
                    ?>
                
                >

                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (!existe("genero") && enviado()) {
                        ?>
                            <span style=color:red>Debe elegir un genero</span>
                        <?
                    }
                ?>
            </p>


            <p><b>Asignaturas</b>
                <label for="idDWES">Desarrollo Web Servidor</label>
                <input type="checkbox" name="asignaturas[]" id="idDWES" value="DWES"
                    <?php
                        if (enviado() && existe("asignaturas[]") && $_REQUEST["asignaturas[]"] == "DWES") {
                            echo "checked";
                        }
                    ?>               
                >

                <label for="idDWEC">Desarrollo Web Cliente</label>
                <input type="checkbox" name="asignaturas[]" id="idDWEC" value="DWEC"
                    <?php
                        if (enviado() && existe("asignaturas[]") && $_REQUEST["asignaturas[]"] == "DWEC") {
                            echo "checked";
                        }
                    ?>  
                >

                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (!existe("asignaturas[]") && enviado()) {
                        ?>
                            <span style=color:red>Debe elegir una asignatura</span>
                        <?
                    }
                ?>
            </p>

            <p><b>Curso</b>
               <select name="curso" id="idCurso">
                    <option value="0">Selecciona una opcion</option>
                    <option value="1">Primero</option>
                    <option value="2">Segundo</option>
               </select>
            </p>

            <p>
                <input type="file" name="fichero" id="idFichero">
            </p>

            <input type="submit" value="Enviar" name="enviar">

        </form>
    </body>
</html>