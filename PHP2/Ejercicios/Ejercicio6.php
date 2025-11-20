<?php

/* Queremos saber la nacionalidad del usuario, si es: inglés, alemán, italiano, español o francés en
caso contrario mostrará por pantalla “El usuario es de una nacionalidad no especificada en la lista”.
Realiza el programa en PHP con un switch. */

$nacionalidad = "español"; // Cambia este valor para probar diferentes nacionalidades
switch ($nacionalidad) {
    case "inglés":
        echo "El usuario es de nacionalidad inglés";
        break;
    case "alemán":
        echo "El usuario es de nacionalidad alemán";
        break;
    case "italiano":
        echo "El usuario es de nacionalidad italiano";
        break;
    case "español":
        echo "El usuario es de nacionalidad español";
        break;
    case "francés":
        echo "El usuario es de nacionalidad francés";
        break;
    default:
        echo "El usuario es de una nacionalidad no especificada en la lista";
}