<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>

<?php
$coches = ["Fiat", "Citroen", "Seat", "Dacia", "Volvo"];
$opciones = $_GET["opcion"]; //Capturando la opcion elegida desde el menu

switch ($opciones) {
    case 1:
        mostrarArray($coches);
        break;
    case 2:
        ordenarArray($coches);
        break;
    case 3:
        numeroArray($coches);
        break;
    case 4:
        include "inicio.php";
        break;

    default:
        echo "Valor no valido ";
        break;
}
function mostrarArray($array)
{
    echo "<h3>Mostramos el array</h3>";
    print_r($array);
    echo "<br>";
    echo "<br>";
}

function ordenarArray($array)
{
    echo "<h3>Array ordenado</h3>";
    sort($array);
    print_r($array);
    echo "<br>";
    echo "<br>";
}
function numeroArray($array)
{
    echo "<h3>Numero de elementos dentro del array</h3>";
    print_r(count($array));
    echo "<br>";
    echo "<br>";

}
?>

<body>
    <a href="inicio.php">Volver al menú</a>
</body>