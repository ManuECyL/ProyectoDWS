<?php
    require("./validar.php");
?>
<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Tarea 8</title>

        <!-- <link rel="stylesheet" href="weebroot/css/estilos.css"> -->
    </head>

    <body>

        <h2>Formulario de Registro</h2>

        <?php

           // if(!enviado() && !validarTodo()) {

                ?>

                <form action="./Tarea8.php" method="post" enctype="multipart/form-data">

                    <!-- NOMBRE -->
                    <p>
                        <label for="idNombre">Alfabetico</label>
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


                    <!-- NOMBRE OPCIONAL -->
                    <p>
                        <label for="idNombreOpcional">Alfabetico Opcional</label>
                        <input type="text" name="nombreOpcional" id="idNombreOpcional" placeholder="Nombre" 
                            value="<?php
                                    if (enviado() && !vacio("nombreOpcional")) {
                                        echo $_REQUEST["nombreOpcional"];
                                    
                                    } 
                                ?>"
                        >
                    </p>


                    <!-- APELLIDO (ALFANUMÉRICO) -->
                    <p>
                        <label for="idApellido">Alfanumerico</label>
                        <input type="text" name="apellido" id="idApellido" placeholder="Apellido" 
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


                    <!-- APELLIDO OPCIONAL (ALFANUMÉRICO) -->
                    <p>
                        <label for="idApellidoOpcional">Alfanumerico Opcional</label>
                        <input type="text" name="apellidoOpcional" id="idApellidoOpcional" placeholder="ApellidoOpcional" 
                            value="<?php
                                if (enviado() && !vacio("apellidoOpcional")) {
                                    echo $_REQUEST["apellidoOpcional"];
                                }
                            ?>"
                        >
                    </p>
                    

                    <!-- FECHA -->
                    <p>
                        <label for="idFecha">Fecha</label>
                        <input type="date" name="fecha" id="idFecha" 
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


                    <!-- FECHA OPCIONAL -->
                    <p>
                        <label for="idFechaOpcional">Fecha Opcional</label>
                        <input type="date" name="fechaOpcional" id="idFechaOpcional" 
                            value="<?php
                                if (enviado() && !vacio("fechaOpcional")) {
                                    echo $_REQUEST["fechaOpcional"];
                                }
                            ?>"
                        >
                    </p>


                    <!-- RADIO OBLIGATORIO -->
                    <p><b>Radio Obligatorio</b>
                        <br>
                        <input type="radio" name="opcion" id="idOpcion1" value="Opcion1"
                            <?php
                                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opcion1") {
                                    echo "checked";
                                }
                            ?>
                        >
                        <label for="idOpcion1">Opcion1</label>

                        <input type="radio" name="opcion" id="idOpcion2" value="Opcion2"
                            <?php
                                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opcion2") {
                                    echo "checked";
                                }
                            ?>
                        >
                        <label for="idOpcion2">Opcion2</label>

                        <input type="radio" name="opcion" id="idOpcion3" value="Opcion3"
                            <?php
                                if (enviado() && existe("opcion") && $_REQUEST["opcion"] == "Opcion3") {
                                    echo "checked";
                                }
                            ?>
                        >       
                        <label for="idOpcion3">Opcion3</label>         
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (!existe("opcion") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe elegir una Opcion!!</span>
                                <?
                            }
                        ?>
                    </p>


                    <!-- SELECT -->
                    <p><b>Elige una opcion:</b>
                    <select name="opcion2" id="idOpcion">
                            <option value="0">Seleccione</option>
                            <option value="1"
                                <?php
                                    if (enviado() && existe("opcion2") && $_REQUEST["opcion2"] == "1") {
                                        echo "selected";
                                    }
                                ?>
                            >Primera</option>

                            <option value="2"
                                <?php
                                    if (enviado() && existe("opcion2") && $_REQUEST["opcion2"] == "2") {
                                        echo "selected";
                                    }
                                ?>
                            >Segunda</option>

                            <option value="3"
                                <?php
                                    if (enviado() && existe("opcion2") && $_REQUEST["opcion2"] == "3") {
                                        echo "selected";
                                    }
                                ?>
                            >Tercera</option>
                    </select>

                    <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (existe("opcion2") && $_REQUEST['opcion2'] == "0" && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe elegir una Opcion!!</span>
                                <?
                            }
                        ?>
                    </p>


                    <!-- CHECKBOX -->
                    <p><b>Elige al menos 1 y maximo 3:</b>
                        <br>
                        <input type="checkbox" name="checks[]" id="idCheck1" value="Check1"
                            <?php
                                if (enviado() && existe("checks") && in_array("Check1", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck1">Check1</label>

                        <input type="checkbox" name="checks[]" id="idCheck2" value="Check2"
                            <?php
                                if (enviado() && existe("checks") && in_array("Check2", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck2">Check2</label>

                        <input type="checkbox" name="checks[]" id="idCheck3" value="Check3"
                            <?php
                                if (enviado() && existe("checks") &&  in_array("Check3", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck3">Check3</label>

                        <input type="checkbox" name="checks[]" id="idCheck4" value="Check4"
                            <?php
                                if (enviado() && existe("checks") && in_array("Check4", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck4">Check4</label>

                        <input type="checkbox" name="checks[]" id="idCheck5" value="Check5"
                            <?php
                                if (enviado() && existe("checks") && in_array("Check5", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck5">Check5</label>

                        <input type="checkbox" name="checks[]" id="idCheck6" value="Check6"
                            <?php
                                if (enviado() && existe("checks") && in_array("Check6", $_REQUEST["checks"]) ) {
                                    echo "checked";
                                }
                            ?>               
                        >
                        <label for="idCheck6">Check6</label>

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


                    <!-- TELEFONO -->
                    <p>
                        <label for="idTelefono">Teléfono</label>
                        <input type="tel" name="telefono" id="idTelefono" placeholder="Teléfono" 
                            value="<?php
                                if (enviado() && !vacio("telefono") && is_numeric("telefono")) {
                                    echo $_REQUEST["telefono"];
                                }
                            ?>">
                        
                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("telefono") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe introducir un número de teléfono!!</span>
                                <?
                            }

                            if (enviado() && !vacio("telefono") && !is_numeric("telefono")) {
                                ?>
                                    <span style=color:red><-- Debe introducir un valor númerico</span>
                                <?
                            }
                        ?>
                    </p>


                    <!-- EMAIL -->
                    <p>
                        <label for="idEmail">Email</label>
                        <input type="email" name="email" id="idEmail" placeholder="Email" 
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


                    <!-- CONTRASEÑA -->
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
                                    <span style=color:red><-- Debe rellenar la contraseña!!</span>
                                <?
                            }
                        ?>
                    </p>


                    <!-- SUBIR FICHERO -->
                    <p>Subir documento
                        <input type="file" name="fichero" id="idFichero" 
                        value="<?php
                            if (enviado() && fichero("fichero")) {
                                echo $_REQUEST["fichero"];
                            }
                        ?>">

                        <?php
                            // Comprobar que no este vacío, si lo está pongo un error
                            if (vacio("fichero") && enviado()) {
                                ?>
                                    <span style=color:red><-- Debe seleccionar un fichero!!</span>
                                <?
                            }
                        ?>
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