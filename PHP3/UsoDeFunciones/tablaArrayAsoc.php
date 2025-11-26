<?php

function esArrayIndexado($arr)
{
    //range(valor inicial, valor final) nos devuelve todos los numeros enteros desde el valor inicial al valor final
    //count() cuenta todos los elementos de un array u objeto
    return array_keys($arr) === range(0, count($arr) - 1);
}

/**
 * Comprueba si el array es un array indexado de arrays asociativos
 * @param array
 * @return bool True si es array de arrays asociativos y false si no lo es
 */
function esArrayDeArraysAsociativos($array)
{
    //Primero comprobamos si el array principal es indexado.
    if (!esArrayIndexado($array)) {
        return false;
    }
    //Despues comprobamos si cada elemento del array es un array y este es asociativo
    foreach ($array as $elemento) {
        if (!is_array($elemento) || esArrayIndexado($elemento)) {
            return false;
        }
    }
    //Ha pasado los filtros por tanto el array es un array indexado de arrays asociativos
    return true;
}

/**
 * Funcion que muestra en una tabla un array indexado de arrays asociativos
 */

function mostrarArrayEnTabla($array)
{
    //Comprobamos que el parametro sea un array
    if (!is_array($array)) { //Si no es un array...
        return "<p>El dato a mostrar no es un array</p>";
    }
    //Comprobamos que el parametro sea un array vacio
    if (empty($array)) { //Si no es un array vacio...
        return "<p>El dato a mostrar es un array vacío</p>";
    }
    //Comprobamos que sea un array de arrays asociativos
    if (!esArrayDeArraysAsociativos($array)) {
        return "<p><b>Su estructura no es de un array de arrays asociativos</b></p>";
    }

    //Comenzamos a construir la tabla en HTML
    $html = "<table>";
    //Encabezados de la tabla (las claves del primer elemento)
    $html .= "<tr>";
    //Array_keys() -> devuelve las claves o indices de un array
    //reset() -> establece el puntero interno en el primer elemento del array
    //Recorremos primer elemento para scar las claves(cabeceras del array )
    foreach (array_keys(reset($array)) as $cabeceras) {
        $html   .= "<th> $cabeceras </th> ";
    }
    $html .= "</tr>";
    //Pintar las filas de la tabla
    foreach ($array as $fila) {
        $html .= "<tr>";
        foreach ($fila as $valor) {
            $html .= "<td>$valor</td>"; //Pintamos la celda
        }
        $html .= "</tr>";
    }

    $html .= "</table>";
    return $html;
}

/* $usuario2 = ["Luis", 43, "Almeria"];
mostrarArrayEnTabla($usuarios);
mostrarArrayEnTabla("esto es un texto");
mostrarArrayEnTabla(null);
mostrarArrayEnTabla([]);
mostrarArrayEnTabla($usuario2); */
