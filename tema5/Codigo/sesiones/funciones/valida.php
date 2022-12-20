<?php
    require "./BD.php";

    session_start();

    $user = $_REQUEST['user'];
    $pass = $_REQUEST['pass'];

    if (empty($user)) {
        
        $_SESSION['error'] = "<span style=color:red>El usuario no puede estar vacio!!</span>";

        header('Location: ../login.php');
        exit;

    } elseif (empty($pass)) {
        $_SESSION['error'] = "<span style=color:red>La contraseña no puede estar vacia!!</span>";

        header('Location: ../login.php');
        exit;

    } else {

        if (validaUser($user, $pass)) {
        
            if ($_SESSION['perfil'] == 'ADM01') {
                header('Location: ../paginas/admin.php');
                exit;
            
            } else {
                header('Location: ../paginas/home.php');
                exit;
            }
    
        } else {
            $_SESSION['error'] = "<span style=color:red>No existe el usuario!!</span>";

            header('Location: ../login.php');
            exit;
        }
    }


?>