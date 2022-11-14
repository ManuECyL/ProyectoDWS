<?

    function vacio($nombre) {
        if (empty($_REQUEST[$nombre])) {
            return true;
        }

        return false;
    }

    function editado() {
        if (isset($_REQUEST['editar'])) {
            return true;
        }

        return false;
    }

    function leido() {
        if (isset($_REQUEST['leer'])) {
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

    function crearFichero() {

        if ($fp == fopen($_REQUEST("fichero"),'w')) {
            $escribir = '08/11/22';
            fwrite($fp, $escribir, strlen($escribir));
            fclose($fp);

        } else {
            echo "<br>";
            echo "<br>Ha habido un problema al abrir el fichero";
        }
    }


?>