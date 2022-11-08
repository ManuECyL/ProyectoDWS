<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 9</title>

        <link rel="stylesheet" href="weebroot/css/estilos.css">
    </head>

    <body>
        <h1>Tarea 9</h1>

        <h2>Formulario de registro</h2>

        <?php

            // if(enviado() && validarTodo()) {
            //     mostrarTodo();

            // } else {

        ?>

                <form action="./Tarea9.php" method="post" enctype="multipart/form-data">

                    <!-- NOMBRE -->
                    <p>
                        <label for="idNombre">Nombre:</label>
                        <input type="text" name="nombre" id="idNombre" placeholder="Nombre" 
                            value="<?php

                                $patron = '/^\w{3,}$/';

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
                                <span style=color:red><-- El nombre debe contener al menos 3 letras!!</span>
                            <?
                            }
                        ?>
                    </p>


                    <!-- APELLIDOS -->
                    <p>
                        <label for="idApellido">Apellidos:</label>
                        <input type="text" name="apellido" id="idApellido" placeholder="Apellido1 Apellido2" 
                            value="<?php

                                $patron = '/^\w{3,}\s\w{3,}$/';

                                if (enviado() && !vacio("apellido") && preg_match($patron, $_REQUEST["apellido"])) {
                                    echo $_REQUEST["apellido"];
                                }
                            ?>">
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("apellido") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe introducir un apellido!!</span>
                                <?
                            }

                            if (!vacio("apellido") && enviado() && !preg_match($patron, $_REQUEST["apellido"])) {
                                ?>
                                <span style=color:red><-- Los apellidos deben contener al menos 3 letras y estar separados por un espacio!!</span>
                            <?
                            }
                        ?>
                    </p>
                    

                    <!-- FECHA -->
                    <p>
                        <label for="idFecha">Fecha:</label>
                        <input type="text" name="fecha" id="idFecha" placeholder="dd-mm-yyyy"
                            value="<?php

                                $patron = '/^\d{2}\-\d{2}\-\d{4}$/';

                                if (enviado() && !vacio("fecha") && preg_match($patron, $_REQUEST["fecha"]) && mayorEdad($_REQUEST["fecha"])) {
                                    echo $_REQUEST["fecha"];
                                }
                            ?>">
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("fecha") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe seleccionar una fecha!!</span>
                                <?
                            }

                            if (!vacio("fecha") && enviado() && !preg_match($patron, $_REQUEST["fecha"])) {
                                ?>
                                <span style=color:red><-- La fecha debe ser en el formato: dd-mm-yyyy!!</span>
                            <?
                            }
                        ?>
                    </p>


                   <!-- DNI -->
                   <p>
                        <label for="idDNI">DNI:</label>
                        <input type="text" name="dni" id="idDNI" placeholder="DNI" 
                            value="<?php

                                $patron = '/^\d{8}\w{1}$/';

                                if (enviado() && !vacio("dni") && preg_match($patron, $_REQUEST["dni"])) {
                                    echo $_REQUEST["dni"];
                                }
                            ?>">
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("dni") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe introducir un DNI!!</span>
                                <?
                            }

                            if (!vacio("dni") && enviado() && !preg_match($patron, $_REQUEST["dni"])) {
                                ?>
                                    <span style=color:red><-- DNI incorrecto!!</span>
                                <?
                            }
                        ?>
                    </p>

                    <!-- EMAIL -->
                    <p>
                        <label for="idEmail">Email:</label>
                        <input type="text" name="email" id="idEmail" placeholder="Email" 
                            value="<?php

                                $patron = '/^[[:alnum:]]+\@[[:alnum:]]+\.[[:alnum:]]{2,}$/';

                                if (enviado() && !vacio("email") && preg_match($patron, $_REQUEST["email"])) {
                                    echo $_REQUEST["email"];
                                }
                            ?>">
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("email") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe introducir un email!!</span>
                                <?
                            }

                            if (!vacio("email") && enviado() && !preg_match($patron, $_REQUEST["email"])) {
                                ?>
                                    <span style=color:red><-- Email incorrecto!!</span>
                                <?
                            }
                        ?>
                    </p>

                    <br>

                    <input type="submit" value="Enviar" name="enviar" style=width:170px>

                </form>
            
            <?php

                // }
            ?>
            
                <br>

                <ul>
                    <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea9/Tarea9.php" target="_blank">Código Tarea</a></li>
                    <br>
                    <li><a href="../../../verfichero.php?fichero=tema3/Tareas/Tarea9/validar.php" target="_blank">Código Validar</a></li>
                </ul>

    </body>
</html>