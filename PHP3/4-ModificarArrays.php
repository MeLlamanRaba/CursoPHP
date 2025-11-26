<?php
//Creamos un array
$fruta = ["naranja", "platano", "piña", "lichi", "coco"];
echo "array original: ";
print_r($fruta);
echo "<br>";

/* Eliminar primer elemento del array.
- Reindexa el array.
- Con asociativos las claves se mantienen como estan.
- Devuelve el valor extraido.
SINTAXIS: array_shift(&$array):mixed
*/

$eliminado = array_shift($fruta);
echo "Elemento eliminado: $eliminado <br>";
print_r($fruta);
echo "<br>";

/* Añadir un elemento al principio del array.
- Reindexa el array.
- Con asociativos la clave del elemento añadido se asigna automaticamente como indice numerico.
- Devuelve el nuevo numero de elementos que contiene el array ahora.
SINTAXIS: array_unshift(&$array):mixed
*/

$numeroElemento = array_unshift($fruta, "peras");
echo "Numero de elementos actual: $numeroElemento <br>";
print_r($fruta);
echo "<br>";

/* Eliminar ultimo elemento del array.
- Devuelve el valor extraido.
- Modifica el array original.
SINTAXIS: array_pop(&$array):mixed
*/

$eliminado = array_pop($fruta);
echo "Elemento eliminado: $eliminado <br>";
print_r($fruta);
echo "<br>";

/* Añadir un elemento al final del array.
- Con asociativos la clave del elemento añadido se asigna automaticamente como indice numerico.
- Devuelve el nuevo numero de elementos (int) que contiene el array ahora.
SINTAXIS: array_unshift(&$array):mixed
*/

$numeroElemento = array_push($fruta, "peras");
echo "Numero de elementos actual: $numeroElemento <br>";
print_r($fruta);
echo "<br>";
