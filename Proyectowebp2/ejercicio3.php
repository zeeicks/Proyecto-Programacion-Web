<?php

  // Definimos las variables
  $v_0 = 0;
  $a = 9.8;

  // Calculamos la posición y la velocidad después de 1 segundo
  $x_1 = $v_0 * 1 + ($a * 1^2) / 2;
  $v_1 = $v_0 + $a * 1;

  // Imprimimos los resultados
  echo "Tiempo1: \tPosición: $x_1\tVelocidad: $v_1\n";

  // Calculamos la posición y la velocidad después de 2 segundos
  $x_2 = $v_0 * 2 + ($a * 2^2) / 2;
  $v_2 = $v_0 + $a * 2;

  // Imprimimos los resultados
  echo "Tiempo2: \tPosición: $x_2\tVelocidad: $v_2\n";

  // Calculamos la posición y la velocidad después de 3 segundos
  $x_3 = $v_0 * 3 + ($a * 3^2) / 2;
  $v_3 = $v_0 + $a * 3;

  // Imprimimos los resultados
  echo "Tiempo3: \tPosición: $x_3\tVelocidad: $v_3\n";

?>
