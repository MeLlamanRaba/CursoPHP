<?php
/* Estructura de contro de flujo de repeticion
Se usa: Cuando no sabemos cuantas veces se va a repetir el bucle


Sintaxis:
while (condicion) {
    bloque de instrucciones
    ...
    Incremento o decremento
}
 */

// Numeros del 10 al 1
echo "<h2>Números del 10 al 1</h2><br>";
$num = 10;
while ($num >= 1) {
    //Variable = condicion ? si es true : so es false
    $separador = $num == 1 ? " " : ", ";
    echo $num . $separador;
    $num--; //decrementar el valor de num
}

echo "<h2>Repetir n veces hasta respuesta correcta o sobrepasar el numero de intentos usando WHILE</h2>";
echo "<h2>¿Cual es la capital de España?</h2><br>";
//Variables
$ciudades = ["Logroño", "Córdoba", "Santander", "Madrid", "Huesca", "Almeria", "Malaga", "Cadiz"];
$intentos = 0;
$maximoIntentos = 5;
$respuesta = "";

while ($respuesta != "Madrid") {
    $respuesta = $ciudades[$intentos];
    $mensaje = $respuesta != "Madrid" ? $ciudades[$intentos] . " es incorrecto. Vuelve a intentarlo" : $ciudades[$intentos] . " es la respuesta correcta";
    $intentos++; //Incrementar el valor de la condicion
    echo " Intento " . $intentos . " --- $mensaje <br>";
    if($intentos==$maximoIntentos){
        $respuesta="Madrid"; //o usar un break
        echo "<p>Número de intentos superado. La respuesta correcta es $respuesta</p>";
    }
}
