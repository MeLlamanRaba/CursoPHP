<?php
$nota1 = 2;
$nota2 = 8;
$nota3 = 5;

//Estructuras de control de flujo de seleccion

//If simple
if ($nota2 >= 5) {
    echo "Nota2 aprobada <br>";
}

//If con sintaxis alternativa
if ($nota2 >= 5):
    echo "Nota2 aprobada <br>";
endif;

//If anidados
if ($nota2 >= 5) {
    echo "Nota2 aprobada. La primera condicion es verdadera <br>";
    if ($nota2 >= 9) {
        echo "Sobresaliente. La 2ª condicion se cumple";
    }
}

//If-Else
if ($nota1 >= 5 && $nota2 >= 5) { //Condicional "Y"
    echo "Nota1 y nota 2 estan aprobaddas <br>";
} else {
    echo "Alguna de las dos notas no esta aprobada <br>";
}

//Sintaxis alternativa
if ($nota1 >= 5 && $nota2 >= 5): //Condicional 'Y'. Si se cumplen las dos
    echo "Nota1 y nota 2 estan aprobaddas <br>";
else:
    echo "Alguna de las dos notas no esta aprobada <br>";
endif;

if ($nota1 >= 5 || $nota2 >= 5): //Condicional 'O'. Si se cumple al menos una
    echo "Almenos una esta aprobada <br>";
else:
    echo "Ninguna esta aprobada <br>";
endif;
