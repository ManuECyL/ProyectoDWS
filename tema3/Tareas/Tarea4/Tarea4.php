<link rel="stylesheet" href="/weebroot/css/estilos.css">

<h1>Tarea 3</h1>
&nbsp;

<?php

  $valor = implode($_GET);

  echo "<h2>1. Realiza un programa utilizando bucles que muestre la siguiente figura:</h2>";

  for($i = 1; $i <= $valor; $i++){

      for($blanco = 1; $blanco <= $valor-$i; $blanco++){
          echo "&nbsp;&nbsp;";
      }
  
      for($astericos=1; $astericos <= ($i*2) - 1; $astericos++){
          echo "*";
      }
      echo "<br>";   
  }


  echo "<h2>2. Realiza un programa utilizando bucles que muestre la siguiente figura:</h2>";

  for($i = 1; $i <= $valor; $i++){

      for($blanco = 1; $blanco <= $valor-$i; $blanco++){
          echo "&nbsp;&nbsp;";
      }
  
      for($astericos=1; $astericos <= ($i*2) - 1; $astericos++){
          echo "*";
      }
      echo "<br>";
  }

  for($i = $valor; $i >= 1; $i--){
    
    for($blanco = 1; $blanco <= $valor-$i; $blanco++){
        echo "&nbsp;&nbsp;";
    }

    for($astericos=1; $astericos <= ($i*2)-1; $astericos++){
        echo "*";
    }
    echo "<br>";
}


echo "<h2>3. Realiza un programa utilizando bucles que muestre la siguiente figura:</h2>";

for($i = 1; $i <= $valor; $i++){
    for($blanco = 1; $blanco <= $valor-$i; $blanco++){
        echo "&nbsp;&nbsp;";
    }

    for($astericos = 1; $astericos <= ($i*2) - 1; $astericos++){

        if($astericos == 1 || $astericos == ($i*2)-1){
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

for($i = $valor; $i >= 1; $i--){

    for($blanco = 1; $blanco <= $valor-$i; $blanco++){
        echo "&nbsp;&nbsp;";
    }

    for($astericos=1; $astericos <= ($i*2)-1; $astericos++){

        if($astericos == 1 || $astericos == ($i*2)-1){
            echo "*";
        } else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}


echo "<h2>4. Realiza un programa utilizando bucles que muestre la siguinte :</h2>";

?>