<?php
//Array asociativos: Sustituimos los indices por claves
$exploradores = [
    "Explorador1" => "Chorme",
    "Explorador2" => "Firefox",
    "Explorador3" => "Safari"
];
echo "<strong>Explorador 3: </strong>" . $exploradores["Explorador3"] . "<br>";
//echo "<strong>Explorador3</strong>" . $exploradores[2]; //Da error 
$datos = [
    "nombre" => "Antonio",
    "edad" => 23,
    "profesor" => true,
    5 => 100,
    "4" => 200
];
echo "Nombre: " . $datos['nombre'] . "<br>";
echo "Clave numerica 5: " . $datos[5] . "<br>";
echo "Clave alfanumerica 4: " . $datos["4"] . "<br>";
echo "<b>var_dump() del array datos: </b>";
var_dump($datos)."<br>";
//Se puede generar un array asociativo con la funcion array_combine
//Combinando dos arrayas. Uno sera el de claves (keys) y otro el de valores (values)

$keys=["uno", "dos", "tres"];
$values=[1,2,3];
$arrayAsociativo = array_combine($keys, $values);
echo "<br><b>Array asociativo generado con array_combine(): </b><br>";
print_r($arrayAsociativo);