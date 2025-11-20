<?php
/* for (inicializacion; condicion ; incremento) {
    codigo a ejecutar en cada iteracion
} 
*/

//Pintar los numeros del 1 al 10
for ($i = 1; $i <= 10; $i++) {
    echo "Número: " . $i . "<br>";
}

echo "<br>";
//Pintar los numeros pares del 10 al 1

for ($i = 10; $i >= 1; $i--) {
    echo "Número: " . $i . "<br>";
}

echo "<br>";

//Numeros pares del 0 al 10 usando MOD

for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 == 0) { //Si el resto de la division entre 2 es 0, es par
        echo "Número par: " . $i . "<br>";
    }
}
?>

<!-- Tablas de multiplicar (tabla del 1 al 10) -->
<div>
    <div style="display: flex;">
        <?php
        for ($num = 1; $num <= 10; $num++) {
        ?>
            <div style="flex: 10%;">
                <?php
                echo "<h3>Tabla del " . $num . "</h3>";
                for ($i = 1; $i <= 10; $i++) {
                    echo $num . " x " . $i . " = " . $num * $i . "<br>";
                }
                ?>
            </div>
        <?php
        }
        ?>

    </div>
</div>