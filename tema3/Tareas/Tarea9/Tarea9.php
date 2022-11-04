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

        <!-- <link rel="stylesheet" href="weebroot/css/estilos.css"> -->
    </head>

    <body>
        <h1>Tarea 9</h1>

        <h2>Formulario de registro</h2>

        <?php

           // if(!enviado() && !validarTodo()) {

                ?>

                <form action="./Tarea9.php" method="post" enctype="multipart/form-data">

                    <!-- NOMBRE -->
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
                                    <span style=color:red><-- Debe introducir un nombre!!</span>
                                <?
                            }
                        ?>
                    </p>


                    <!-- APELLIDOS -->
                    <p>
                        <label for="idApellido">Apellidos</label>
                        <input type="text" name="apellido" id="idApellido" placeholder="Apellidos" 
                            value="<?php
                                if (enviado() && !vacio("apellido")) {
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
                        ?>
                    </p>
                    
                    <!-- CONTRASEÑA -->
                    <p>
                        <label for="idPass">Contraseña</label>
                        <input type="password" name="pass" id="idPass" placeholder="Contraseña" 
                            value="<?php
                                if (enviado() && !vacio("pass")) {
                                    echo $_REQUEST["pass"];
                                }                    
                            ?>">

                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("pass") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe rellenar la contraseña!!</span>
                                <?
                            }
                        ?>
                    </p>

                    
                    <!-- REPETIR CONTRASEÑA -->
                    <p>
                        <label for="idPass">Repetir Contraseña</label>
                        <input type="password" name="pass" id="idPassRep" placeholder="Contraseña"
                            value="<?php
                                if (enviado() && !vacio("pass")) {
                                    echo $_REQUEST["pass"];
                                }                    
                            ?>">

                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("pass") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe rellenar la contraseña!!</span>
                                <?
                            }

                            // // Comprobar que las contraseñas coinciden
                            // if (!vacio("pass") && enviado() && "idPass".value != "idPassRep".value) {
                               /* ?>
                                    <span style=color:red><-- Las contraseñas no coinciden!!</span>
                                <?*/
                            // }
                        ?>
                    </p>


                    <!-- FECHA -->
                    <p>
                        <label for="idFecha">Fecha</label>
                        <input type="text" name="fecha" id="idFecha" placeholder="Fecha"
                            value="<?php
                                if (enviado() && !vacio("fecha")) {
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
                        ?>
                    </p>


                   <!-- DNI -->
                   <p>
                        <label for="idDNI">DNI</label>
                        <input type="text" name="dni" id="idDNI" placeholder="DNI" 
                            value="<?php
                                if (enviado() && !vacio("dni")) {
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
                        ?>
                    </p>

                    <!-- EMAIL -->
                    <p>
                        <label for="idEmail">Email</label>
                        <input type="text" name="email" id="idEmail" placeholder="Email" 
                            value="<?php
                                if (enviado() && !vacio("email")) {
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
                        ?>
                    </p>


                    <!-- SUBIR IMAGEN -->
                    <p>Seleccionar imagen
                        <input type="file" name="fichero" id="idFichero" value="<?php
                            if (enviado() && fichero("fichero")) {
                                echo $_REQUEST["fichero"];
                            }
                        ?>">
                    </p>

                    <br>

                    <input type="submit" value="Enviar" name="enviar" style=width:170px>

                </form>
            
                <?php
            
            // } else {
            //    mostrarTodo();
            // }

            ?>
    </body>
</html>