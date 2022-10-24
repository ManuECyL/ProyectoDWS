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
        <form action="./Recibe.php" method="post" enctype="multipart/form-data"> <!-- target="_blank" -->
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
                            <span>Debe rellenar el nombre</span>
                        <?
                    }
                ?>
            </p>

            <p>
                <label for="idPass">Contraseña</label>
                <input type="password" name="pass" id="idPass" 
                    value="<?php
                        if (enviado() && !vacio("nombre")) {
                            echo $_REQUEST["nombre"];
                        }                    
                    ?>">>

                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (vacio("pass") && enviado()) {
                        ?>
                            <span>Debe rellenar la contraseña</span>
                        <?
                    }
                ?>
            </p>

            <p><b>Genero</b>
                <label for="idMasculino">Masculino</label>
                <input type="radio" name="genero" id="idMasculino" value="masculino">

                <label for="idFemenino">Femenino</label>
                <input type="radio" name="genero" id="idFemenino" value="femenino">

                <?php
                    // Comprobar que no este vacío, si lo está pongo un error
                    if (existe("genero") && enviado()) {
                        ?>
                            <span>Debe elegir un genero</span>
                        <?
                    }
                ?>
            </p>

            <p><b>Asignaturas</b>
                <label for="idDWES">Desarrollo Web Servidor</label>
                <input type="checkbox" name="asignaturas[]" id="idDWES" value="DWES">

                <label for="idDWEC">Desarrollo Web Cliente</label>
                <input type="checkbox" name="asignaturas[]" id="idDWEC" value="DWEC">
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