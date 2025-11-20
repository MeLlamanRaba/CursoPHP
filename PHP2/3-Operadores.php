<?php

/*************************** 
 * Operadores aritmeticos  *
 ***************************/
$a = 23;
$b = 3;
$c = $a + $b; //Suma
echo "Suma: $a + $b = $c <br>";
$c = $a - $b; //Resta
echo "Resta: $a - $b = $c <br>";
$c = $a * $b; //Multiplicacion
echo "Multiplicacion: $a * $b = $c <br>";
$c = $a / $b; //Division
echo "Division: $a / $b = $c <br>";
$c = $a % $b; //Modulo
echo "Modulo: $a % $b = $c <br>";
$c = $a ** $b; //Exponente
echo "Exponente: $a ** $b = $c <br>";
/*************************** 
 * Operadores de cadena    * Solo uno, el .
 ***************************/
$Saludo = "Hola";
$persona = "Marta";

echo $Saludo .  " " . $persona . "<br>";

/*************************************************************
 * Operadores de logicos                                     *
 * Realizan una comprobacion logica y devuelven un booleano  *
 * !$a............. No es $a                                 *
 * $a && $b....... $a y $b                                   *
 * $a || $b....... $a o $b                                   *
 *************************************************************/
$a = true;
$b = false;

if ($a && $b) {
    //El caracter de escape \ se usa para indicar que lo
    //que sigue a continuacion no es parte del codigo
    echo "\$a y \$b son verdaderos los dos";
} else {
    echo "al menos una de las do es false";
}

/****************************************************************
 * Operadores de comparacion                                    *
 * "==" igual                                                   *
 * "===" identico (tambien los tipos)                           *
 * "<, >, <=, >=, != (menor que, mayor que, menor o igual que)" *
 *                    myor igual que, distinto a                * 
 ****************************************************************/

$a = 12;
$b = "12";
$c = 10;

if ($a == $b) {
    echo "<br>\$a es igual a \$b<br>";
} else {
    echo "<br>\$a no es igual a \$b<br>";
}
if ($a === $b) {
    echo "<br>\$a es identico a \$b<br>";
} else {
    echo "<br>\$a no es identico a \$b<br>";
}
if ($a <= $b) {
    echo "<br>\$a es menor o igual que \$b<br>";
} else {
    echo "<br>\$a es mayor o igual que \$b<br>";
}

/***************************************************************************
 * Operadores de incremento y decremento                                   *
 * ++$a  Pre-incremento - Incrementa la variable y luego devuelve          *
 * $a++  Post-incremento - Devuelve el valor y luego lo incrementa         *
 * --$a  Pre-decremento - Decrementa la variable y luego devuelve el valor *
 * $a--  Post-decremento - Devuelve el valor y luego lo decrementa         *
 ***************************************************************************/

$a = 5;
$b = 5;
echo"Preincremento: ". ++$a . "<br>"; //1º incrementa y luego lo devuelve
echo "Mostramos el valor actual: $a . <br>"; //Pinta el estado actual $a
echo"Postincremento: ". $b++ . "<br>"; //1º devuelve el valor y luego lo incrementa
echo "Mostramos el valor actual: $b . <br>"; //Pinta el estado actual de $b