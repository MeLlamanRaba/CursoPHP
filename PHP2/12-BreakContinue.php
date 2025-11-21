<?php
//BREAK
echo "<h3>BREAK</h3>";
for ($i = 1; $i <= 10; $i++) {
    if ($i == 4) {
        echo "Valor de i: $i <br>";
        break; //Interrumpe la ejecucion del bucle
    }
    echo "Valor de i: $i <br>";
}


//CONTINUE 
echo "<h3>CONTINUE</h3>";
for ($k = 1; $k <= 10; $k++) {
    if ($k == 4) {
         echo "Saltamos el valor de k: $k <br>";
        continue; //Salta solo la iteracion en curso
    }
    echo "paso $k <br>";
}
