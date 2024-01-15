<?php

// Constantes
const GRAVEDAD = 9.8;
const ALTURA = 144; // 144 pies
const PROFUNDIDAD = 18; // 18 pulgadas

// Variables
$velocidadInicial;
$aceleracion;
$tiempo;

// Resolución
// (a) Velocidad inicial
$velocidadInicial = (2 * ALTURA) / GRAVEDAD;

// (b) Aceleración promedio
$aceleracion = (2 * PROFUNDIDAD) / GRAVEDAD;

// (c) Tiempo
$tiempo = (PROFUNDIDAD) / GRAVEDAD;

// Redondeo a 1 decimal
$velocidadInicial = round($velocidadInicial, 1);
$aceleracion = round($aceleracion, 1);
$tiempo = round($tiempo, 1);

// Impresión de resultados
echo "(a) La velocidad de la mujer exactamente antes de chocar con el ventilador es de " . $velocidadInicial . " pies/s.";
echo "(b) La aceleración promedio de la mujer mientras está en contacto con la caja es de " . $aceleracion . " pies/s².";
echo "(c) La caja tarda " . $tiempo . " s en sumir.";

?>
