<?php

// time()+120 -> A los 2 minutos expira la cookie

    // setcookie('nombre','manuc',time()+120);
    // setcookie('otra','pepe',time()+120);

    setcookie('otra2','juan',time()-120);
    
    print_r($_COOKIE);

?>