<?php
/* 
Pasos de atributos por valor y por referencia
    Por valor: Se pasa una copia del valor de la variable. No modifica la variable original.
    Por referencia: Se usa el simbolo '&' delante del nombre del parametro enviado. Modifica la variable original. */

$num1 = 4;
function miFuncion1($num)
{
    //No modifica el valor original
    $num = $num + 2;
    echo "Valor dentro de la funcion: $num
    <br>";
}
function miFuncion2(&$num1)
{
    //Modifica el valor original
    $num1 = $num1 + 2;
    echo "Valor dentro de la funcion: $num1
    <br>";
}

miFuncion1($num1);
echo $num1 . " Fuera de la funcion <br>";

miFuncion2($num1);
echo $num1 . " Fuera de la funcion";
