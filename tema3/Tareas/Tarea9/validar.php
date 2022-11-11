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


    function mayorEdad() {

        $fecha = date("Y-m-d", strtotime($_REQUEST['fecha']));
        $today = date("Y-m-d");
     
        $fechaForm = new DateTime($fecha);
        $hoy = new DateTime($today);

        $intervalo = $hoy -> diff($fechaForm);
        $dif = $intervalo -> y;

        if ($dif >= 18) {
            return true;  
        }
            
        return false;
    }


    function letraDNI() {

        $dni = $_REQUEST["dni"];

        $letra = substr($dni, -1);
        $numeros = substr($dni, 0, -1);

        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";
        $valor = $numeros % 23;

        $letraNif= substr($letras, $valor, 1);
        
        if ($letraNif == $letra) {
            return true;
        }

        return false;
    }


    function vacioImagen($nombre) {
        if (empty($_FILES[$nombre]['name'])) {
            return true;
        }

        return false;
    }

    function existeDocumentoFile($nombre) {
        
        if (!empty($_FILES[$nombre]['name'])) {
            return true;
        }

        return false;
    }


    function existeDocumentoServer($nombre) {

        if (file_exists($nombre)) {
            return true;
        }

        return false;
    }


    function subirImagen() {
        $ubicacion = "./";
        $nombreTemporal = basename($_FILES['imagen']['name']);
        $ubicacion = $ubicacion.$nombreTemporal;
    
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $ubicacion)) {
            echo "<br>El fichero se ha subido";
        
        } else {
           echo "<br>Ha fallado";
        }
    }

    function validarTodo() {

        if (enviado()) {

            if (!vacio('nombre')) {

                if (!vacio('apellido')) {

                    if (!vacio('fecha') && mayorEdad()) {

                        if (!vacio('dni') && letraDNI()) {
                            
                            if (!vacio('email')) {

                                if (!vacio("imagen") && existeDocumentoServer("imagen")) {
                                    return true;    
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
        echo "<strong>Nombre: </strong>" .$_REQUEST['nombre'];

        // APELLIDO
        echo "<br><strong>Apellidos: </strong>" .$_REQUEST['apellido'];

        // FECHA
        echo "<br><strong>Fecha: </strong>" .$_REQUEST['fecha'];
                
        // DNI
        echo "<br><strong>DNI: </strong>" .$_REQUEST['dni'];

        // EMAIL
        echo "<br><strong>Email: </strong>" .$_REQUEST['email'];

        // IMAGEN
        //print_r($_FILES["imagen"]);
        $img = $_FILES["imagen"];
        echo "<br><strong>Imagen Perfil: </strong>"; 
        echo "<img src='$img' height='557' width='990' />";
    }
?>