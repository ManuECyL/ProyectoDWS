<?
    function vacio($nombre) {
        if (empty($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }


    function enviado() {
        if (isset($_REQUEST['enviar'])) {
            return true;
        }

        return false;
    }


    function existe($nombre) {
        if (isset($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }
    

    function existeDocumento($nombre) {
        if (isset($_FILES[$nombre])) {
            return true;
        }

        return false;
    }

    function checks($nombre) {
        $cont = 0;

        if (isset($_REQUEST[$nombre])) {
            
            $cont = count($_REQUEST[$nombre]); 

            if ($cont >= 1 && $cont <= 3) {
                return true;
            }
        }       
        return false;
    }


    function validarTodo() {

        if (enviado()) {

            if (!vacio('nombre')) {

                if (!vacio('apellido')) {

                    if (!vacio('fecha')) {

                        if (existe('opcion')) {

                            if (existe('select') && $_REQUEST['select']!=0) {

                                if (existe('checks')) {

                                    if (!vacio('telefono')) {

                                        if (!vacio('email')) {
                                            
                                            if (!vacio('pass')) {

                                                if (vacio("fichero") && existeDocumento('fichero'))
                                                    return true;    
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        return false;
    }


    function mostrarTodo() {
        // NOMBRE
        echo "<strong>Nombre:</strong> " .$_REQUEST['nombre'];

        // NOMBRE OPCIONAL
        if (!vacio('nombreOpcional')) {
            echo "<br><strong>Nombre Opcional:</strong> " .$_REQUEST['nombreOpcional'];    
        } 

        // APELLIDO
        echo "<br><strong>Apellido:</strong> " .$_REQUEST['apellido'];

        // APELLIDO OPCIONAL
        if (!vacio('apellidoOpcional')) {
            echo "<br><strong>Apellido Opcional:</strong> " .$_REQUEST['apellidoOpcional'];   
        } 

        // FECHA
        echo "<br><strong>Fecha:</strong> " .$_REQUEST['fecha'];

        // FECHA OPCIONAL
        if (!vacio('fechaOpcional')) {
            echo "<br><strong>Fecha Opcional:</strong> " .$_REQUEST['fechaOpcional'];    
        } 

        // RADIO OBLIGATORIO
        echo "<br><strong>La opcion de radio seleccionada es:</strong> " .$_REQUEST['opcion'];   

        
        // SELECT
        echo "<br><strong>La opcion seleccionada es:</strong> " .$_REQUEST['select'];    

        // CHECKBOX
        echo "<br>";
        echo "<br><strong>Los checks que ha elegido son:</strong> ";

        foreach ($_REQUEST["checks"] as $key => $value) {
            echo "<br>- " . $value;
        }
        echo "<br>";
        
        // TELEFONO
        echo "<br><strong>Teléfono:</strong> " .$_REQUEST['telefono'];

        // EMAIL
        echo "<br><strong>Email:</strong> " .$_REQUEST['email'];
        
        // CONTRASEÑA
        echo "<br><strong>Contraseña:</strong> " .$_REQUEST['pass'];

        // FICHERO
        echo "<br><strong>Fichero:</strong> " .$_FILES['fichero']['name'];
    }

?>