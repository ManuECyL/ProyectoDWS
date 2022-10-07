<h1>Fechas</h1>

<?php
    echo time(); // Segundos que han pasado desde 1970

    echo "<p>Zona</p>";
    echo date_default_timezone_get();
    date_default_timezone_set('Europe/Madrid');
    echo "<br>";
    echo date_default_timezone_get();
    
    echo "<p>Fecha de Hoy: </p>";
    echo date("d m Y h:i:s O"); // d -> Día;  m -> mes(numérico); Y -> año; h-> horas; i -> minutos; s -> segundos; O -> diferencia hora GMT sin colon entre horas y minutos

    echo "<p>Fecha en texto a int: </p>";
    echo strtotime("now");
    echo "<br>";
    echo strtotime("2022-10-04");
    echo "<br>";

    echo date("d/m/Y", time()); // Para formatear el orden de la fecha del día de hoy
    echo "<br>";
    echo date("d/m/Y", strtotime("2022-10-04")); // Para formatear el orden de la fecha indicada
    echo "<br>";

    echo mktime(0,0,0,10,4,2022);
    echo "<p>Diferencia de año, mes y dia entre dos fechas </p>";
    $primera = mktime(0,0,0,10,11,1994);
    $segunda = strtotime("2022-10-04");;
    $dif = $segunda - $primera;

    echo "Diferencia: " .$dif;
    $anos = $dif / (60*60*24*365);
    echo "<br> Los años que han pasado son: " .$anos;

    $fecha1 = new DateTime("1994-10-11");
    $fecha2 = new DateTime();
    $intervalo = $fecha2 -> diff($fecha1);
    echo "<br> Años: " .$intervalo -> y . ", Meses: " .$intervalo -> m . ", Dias: " .$intervalo -> d;



?>