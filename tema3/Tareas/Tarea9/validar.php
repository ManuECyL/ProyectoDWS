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



    function comprobarImg($imagen) {
       
        $imagen = $_REQUEST["imagen"];

        $extensiones = array(0=>'image/jpg',1=>'image/png',2=>'image/bmp');

        if (in_array($_FILES[$imagen]['type'], $extensiones) ) {
            return true;
        }

        return false;
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

        // IMAGEN
        //  echo $_REQUEST['imagen'];
    }
?>