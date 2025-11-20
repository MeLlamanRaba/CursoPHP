<?php
//Variable de tipo integer
$edad = 25;
//Variable de tipo float;
$estatura = 1.80;
//Variable de tipo string
$nombre = "Antonio";
//VAriable de tipo boolean
$es_estudiante = true;
//Mostrar los valores de las variables
echo "<h2>Datos del usuario:</h2>";
echo "Nombre: " . $nombre . "y tiene " . $edad . " años<br>";
echo "Estatura: " . $estatura . " metros<br>";
echo "¿Es estudiante?: " . ($es_estudiante ? "Claro que si" : "Que va saecio") . "<br>";


//Mostrando datos
echo "<h2>Mostrando los valores de las variables</h2>";
echo "<p>" . $edad . " es de tipo integer </p>";
$edad = 86;
echo "<p> $edad  es de tipo integer </p>";
echo "<p>$estatura es de tipo float </p>";
echo "<p>$nombre  es de tipo string </p>";
echo "<p>" . ($es_estudiante ? "si" : "no") . " es de tipo boolean </p>";
