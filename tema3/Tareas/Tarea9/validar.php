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


    function mayorEdad($fecha) {

        $hoy =  date("dd-mm-yyyy");

        $fecha1 = date("dd-mm-yyyy", strtotime($fecha));
        $fecha2 = date("dd-mm-yyyy", strtotime($hoy));

        if ($fecha1 > $fecha2) {
        // Diferencia de año, mes y dia entre dos fechas </p>";
            $primera = mktime($hoy);
            $segunda = strtotime($fecha);
            $dif = $segunda - $primera;
        
            echo "Diferencia: " .$dif;
            $anos = $dif / (60*60*24*365);

            if ($anos >= 18) {
                return true;
            
            } 

        } else {
            return false;
        }
         
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