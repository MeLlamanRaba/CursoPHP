<?php
/* Define un array asociativo con los siguientes datos: nombre, apellidos, dirección, código postal,
localidad y provincia. Después muéstralos por pantalla. */

$datos = [
    "Indice" => "Valor",
    "Nombre" => "Jose",
    "Apellidos" => "Garcia",
    "Direccion" => "C/ Balmes, 10",
    "Codigo Postal" => "08505",
    "Localidad" => "Barcelona",
    "Provincia" => "Barcelona"
];
echo "<b style='font-size:20px;'>Ejercicio 2</b> <br>";

echo "<br><table border='1' 
    style= 'border-collapse: collapse'><tr><th 
    style= 'background-color:lightyellow'>Indice</th><th 
    style= 'background-color:lightyellow'>Valor</th></tr>";
foreach ($datos as $indice => $valor) {
    echo "<tr 
    style= 'background-color:lightgreen'; padding: 30px'><td>$indice</td><td 
    style= 'background-color:lightblue'>$valor</td></tr>";
}
echo "</table>";
