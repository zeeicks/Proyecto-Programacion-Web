<?php

  // Definimos las variables
  $v_0 = 100;
  $a = -5;
  $L = 800;

  // Calculamos el tiempo necesario para detenerse
  $t_detenerse = (0 - $v_0) / $a;

  // Calculamos el tiempo necesario para recorrer la pista
  $t_recorrer = $L / $v_0;

  // Imprimimos los resultados
  echo  "El tiempo mínimo necesario para que el avion se detenga es de : " . $t_detenerse . " segundos. ";

  echo  "El avión no puede aterrizar en el aeropuerto, Este tardara alrededor de  :  " . ($t_detenerse + $t_recorrer) . " segundos en hacerlo. ";

?>
