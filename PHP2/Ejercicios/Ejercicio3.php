<?php

/* //Realiza un programa que controle si una persona está en edad de trabajar o no, recuerda que la
edad laboral es de los 18 a los 67 años. Mostrará por pantalla “El usuario está en edad laboral” o por
el contrario “El usuario NO está en edad laboral”. */

$edad = 45; // Cambia este valor para probar diferentes edades
if ($edad >= 18 && $edad <= 67) {
    echo "El usuario está en edad laboral";
} else {
    echo "El usuario NO está en edad laboral";
}