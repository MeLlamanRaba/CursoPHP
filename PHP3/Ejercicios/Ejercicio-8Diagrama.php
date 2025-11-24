<?php
$diametro = 3;
$diametroMax = 3;
$diametroMin = 1;

if (!is_numeric($diametro)) {
    echo "Diametro debe ser numerico";
} else {
    if ($diametro > $diametroMax || $diametro < $diametroMin) {
        echo "Diametro excede los parametros";
    } else if ($diametro < 1.4) {
        echo "Pequeño";
    } else {
        echo "Grande";
    }
}
