<?

    //Abro el fichero mundial
    $mundial = simplexml_load_file('mundial.xml');
    print_r($mundial);
    echo "<br>";

    //Recorrer
    foreach ($mundial as $equipo) {
        echo "Equipo = ".$equipo->children()[0];
        echo " y entrenador = ".$equipo->children()[1];
        echo "<br>";
    }

    //Añadir
    $equipoNuevo = $mundial->addChild('Equipo');//creo un nuevo equipo
    $equipoNuevo->addChild('Nombre','Italia');//le paso nombre
    $equipoNuevo->addChild('Entrenador','Alexandro');//le paso entrenador

    //guardo los cambios
    $mundial->asXML('mundial2.xml');


?>