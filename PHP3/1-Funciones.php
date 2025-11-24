<?php
$numero1 = 5;
$numero2 = 10;

//Funcion sin parametros
function sumar()
{
    echo "Soy una funcion para sumar<br>";
}

//Funcion con parametros pero sin retorno
function sumarNumeros($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Requiere numeros";
    } else {
        echo "$num1 + $num2 = " . $num1 + $num2 . "<br>";
    }
}

//Funcion con parametros y retorno
/**
 * Esta funcion suma dos numero y devuelve el
 * resultado
 * num1 y num2 pueden ser cualquier numero real
 */
function sumarNumerosRetorno($num1, $num2)
{
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Requiere numeros";
    } else {
        return $num1 + $num2;
    }
}

//Llamadas a función
sumar();
sumarNumeros(6, 24);
$resultado = sumarNumerosRetorno($numero1, $numero2);
echo "El resultado de la suma de $numero1 y $numero2 es $resultado";

//Reutilizamos la funcion

$resultado = sumarNumerosRetorno(35, 1020);
echo "El resultado de la suma de 35 y 1020 es $resultado <br>";
sumarNumeros(5, "b");
