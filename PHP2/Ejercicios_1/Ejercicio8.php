<?php
/* Define las variables $tipo, $grosor, $diámetro y $marca. Establece que el tipo sea “Rueda de
camión”, el grosor 0.33, el diámetro 1.25 y la marca “Kimashuki”. Crea el código PHP donde a través
de condicionales if realices la siguiente comprobación: Si el diámetro dado es un numero. Si
efectivamente lo es, si el diámetro es superior a 1.4 debe mostrarse por pantalla el mensaje “La
rueda es para un vehículo grande”. Si es menor o igual a 1.4 debe mostrarse por pantalla el mensaje
“La rueda es para un vehículo pequeño”. En caso de que no sea un número, debe mostrarse “No
existe un tamaño de rueda válido”.
NOTA: Existe una función que nos indica si es un número: is_numeric()*/

$tipo = "Rueda de camión";
$grosor = 0.33;
$diametro = 1.25;
$marca = "Kimashuki";
if (is_numeric($diametro)) {
    if ($diametro > 1.4) {
        echo "La " . $tipo . " de marca " . $marca . " tiene un grosor de " . $grosor . " y un diametro de " . $diametro . ", es decir que es para un vehiculo grande<br>";
    } else {
        echo "La " . $tipo . " de marca " . $marca . " tiene un grosor de " . $grosor . " y un diametro de " . $diametro . ", es decir que es para un vehiculo pequeño<br>";
    }
} else {
    echo "No existe un tamaño de rueda válido";
}
