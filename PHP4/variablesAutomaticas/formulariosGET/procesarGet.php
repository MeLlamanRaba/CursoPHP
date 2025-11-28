<?php
if (isset($_GET["nombre"])) { //Si existe el dato nombre en el array $_GET 
    echo "No hay datos para mostrar";
} else {

    $nombre = $_GET["nombre"];
    $password = $_GET["password"];
    $estado = $_GET["estado"];
    $hijos = $_GET["hijos"];
    $aficiones = $_GET["afiiciones"] ?? ["No suministrado"];

    echo "Tu nombre es $nombre";
    echo "con contraseña $contraseña <br>";
    echo "Tu estado civil es  $estado";
    echo "y tienes $hijos hijos/s <br>";
    echo "Tus actividades son: <br>";

    foreach ($aficiones as $aficion) {
        echo str_repeat("&nbsp", 10);
        echo "$aficion <br>";
    }
}
