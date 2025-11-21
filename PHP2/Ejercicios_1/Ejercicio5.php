<?php

/* Realiza un programa PHP que introduciendo un número en una variable llamada $dia me diga a que
día de la semana corresponde.
 */

$dia = 3;
switch ($dia) {
    case 1:
        echo "Lunes";
        break;
    case 2:
        echo "Martes";
        break;
    case 3:
        echo "Miercoles";
        break;
    case 4:
        echo "Jueves";
        break;
    case 5:
        echo "Viernes";
        break;
    case 6:
        echo "Sabado";
        break;
    case 7:
        echo "Domingo";
        break;
    default:
        echo "El valor no corresponde a ningun dia de la semana";
}
