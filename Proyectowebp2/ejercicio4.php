<?php

// Constantes
const GRAVEDAD = 9.8;
const ALTURA = 4;
const TIEMPO = 1.5;

// Variables
$velocidadInicial;
$velocidadFinal;

// Resolución
// (a) Velocidad inicial
$velocidadInicial = (2 * ALTURA) / TIEMPO;

// (b) Velocidad final
$velocidadFinal = $velocidadInicial -TIEMPO * GRAVEDAD;

// Redondeo a 2 decimales
$velocidadInicial = round($velocidadInicial, 2);
$velocidadFinal = round($velocidadFinal, 2);

// Impresión de resultados
echo "(a) La velocidad inicial de las llaves es de " . $velocidadInicial . " m/s.";
echo "(b) La velocidad de las llaves justo antes de ser atrapadas es de " . $velocidadFinal . " m/s.";

?>
