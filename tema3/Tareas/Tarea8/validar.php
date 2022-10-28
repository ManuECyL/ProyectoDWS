<?

    function validarTodo() {


    }

    function mostrarTodo() {
        // NOMBRE
        echo "El nombre es: " .$_REQUEST['nombre'];

        // NOMBRE OPCIONAL
        if (!vacio('nombreOpcional')) {
            echo "<br> El nombre opcional es: " .$_REQUEST['nombreOpcional'];    
        } 

        // APELLIDO
        echo "<br>El apellido es: " .$_REQUEST['apellido'];

        // APELLIDO OPCIONAL
        if (!vacio('apellidoOpcional')) {
            echo "<br> El apellido opcional es: " .$_REQUEST['apellidoOpcional'];   
        } 

        // FECHA
        echo "<br>La fecha es: " .$_REQUEST['fecha'];

        // FECHA OPCIONAL
        if (!vacio('fechaOpcional')) {
            echo "<br> La fecha opcional es: " .$_REQUEST['fechaOpcional'];    
        } 

        // RADIO OBLIGATORIO
        echo "<br> La opcion de radio seleccionada es: " .$_REQUEST['opcion'];   

        
        // SELECT
        echo "<br> La opcion seleccionada es: " .$_REQUEST['opcion2'];    

        // CHECKBOX
        echo "<br>";
        echo "<br> Los checks que ha elegido son: ";

        foreach ($_REQUEST["checks"] as $key => $value) {
            echo "<br>- " . $value;
        }
        echo "<br>";
        
        // TELEFONO
        echo "<br>El teléfono es: " .$_REQUEST['telefono'];

        // EMAIL
        echo "<br>El email es: " .$_REQUEST['email'];
        
        // CONTRASEÑA
        echo "<br>La contraseña es: " .$_REQUEST['pass'];

        // FICHERO
        $ubicacion = "/var/www/html/ProyectoDWS/tema3/Tareas/Tarea8/";
        $nombreTemporal = basename($_FILES['fichero']['name']);
        $ubicacion = $ubicacion.$nombreTemporal;
    
        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)) {
            echo "<br>El fichero se ha subido";
        }
    }


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

    function fichero($fichero) {
        $ubicacion = "/var/www/html/ProyectoDWS/tema3/codigo/Formulario/";
        $nombreTemporal = basename($_FILES['fichero']['name']);
        $ubicacion = $ubicacion.$nombreTemporal;
    
        if (move_uploaded_file($_FILES['fichero']['tmp_name'], $ubicacion)) {
            echo "<br>El fichero se ha subido";
        
        } else {
            echo "<br>Ha fallado";
        }
    }

?>