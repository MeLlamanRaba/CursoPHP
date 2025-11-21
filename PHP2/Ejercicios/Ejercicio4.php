<?php

/* Usando la estructura de control IF..ELSEIF... Realiza un programa que muestre un saludo
personalizado según la hora del día y las siguientes condiciones:

Si 8 < hora < 13 → El saludo es “Buenos días”
Si 13 < hora < 15 → El saludo es “Que aproveche la comida” Si
15 < hora < 17 → El saludo es “Es la hora del café”
Si 17 < hora < 20 → El saludo es “Es la hora de la merienda” Demás
casos → El saludo es “Buenas noches” */

$hora = 19; // Cambia este valor para probar diferentes horas
if ($hora > 8 && $hora <= 13) {
    echo "Buenos dias";
} elseif ($hora > 13 && $hora <= 15) {
    echo "Que aproveche la comida";
} elseif ($hora > 15 && $hora <= 17) {
    echo "Es la hora del café";
} elseif ($hora > 17 && $hora <= 20) {
    echo "Es la hora de la merienda";
} else {
    echo "Buenas noches";
}
