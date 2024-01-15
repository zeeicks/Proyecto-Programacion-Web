<?php

  // Definimos las variables
  $v_0 = 0;
  $a = 10;
  $d = 400;

  // Calculamos el tiempo
  $t = sqrt(2 * $d / $a);

  // Redondeamos el tiempo a dos decimales
  $t = round($t, 2);

  // Calculamos la velocidad final
  $v_f = $v_0 + $a * $t;

  // Redondeamos la velocidad final a dos decimales
  $v_f = round($v_f, 2);

  // Imprimimos los resultados
  echo "El tiempo de recorrido es de " . $t . " segundos.\n";
  echo "La velocidad final es de " . $v_f . " m/s.\n";

?>
