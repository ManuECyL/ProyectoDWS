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


    funcTion letraDNI() {

        $DNI = $_REQUEST["dni"];

        $valor= (int) ($DNI / 23);

        $valor *= 23;

        $valor= $DNI - $valor;

        $letras= "TRWAGMYFPDXBNJZSQVHLCKEO";

        $letraNif= substr ($letras, $valor, 1);

        echo "La letra del DNI: ".$DNI. " es -> ".$letraNif;
    }


    function validarTodo() {

        if (enviado()) {

            if (!vacio('nombre')) {

                if (!vacio('apellido')) {

                    if (!vacio('fecha')) {

                        if (!vacio('dni')) {
                            
                            if (!vacio('email')) {

                                return true;    
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
        echo "El nombre es: " .$_REQUEST['nombre'];

        // APELLIDO
        echo "<br>Los apellidos son: " .$_REQUEST['apellido'];

        // FECHA
        echo "<br>La fecha es: " .$_REQUEST['fecha'];
                
        // DNI
        echo "<br>El DNI es: " .$_REQUEST['dni'];

        // EMAIL
        echo "<br>El email es: " .$_REQUEST['email'];
    }
?>