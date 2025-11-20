<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <?php
    //La funcion array se usa para crear un nuevo array
    $frutas = array("Manzana", "Naranja", "Pera");
    // Una sintaxis mas corta se puede usar con corchetes
    $coches = ["Seat león", "BMW 320i", "Lanborghini Huracan"];

    echo "Mostramos el contenido de la posicion 1 de frutas: $frutas[1]<br>";
    echo "Mostramos el contenido de la posicion 2 de coches: $coches[2]<br>";

    //Con var_dump() podemos ver indice, tipo y contenido del array
    var_dump($frutas);
    //Con print_r() vemos indices y contenido pero no el tipo
    echo "<br>";
    print_r($coches); 
    ?>
</body>

</html>