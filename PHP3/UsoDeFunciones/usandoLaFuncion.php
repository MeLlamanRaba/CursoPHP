<!DOCTYPE html>
<?php
include_once("tablaArrayAsoc.php");
$usuarios = [
    ["nombre" => "Pepe", "Apellido" => "Perez", "Dni" => "77170975h"],
    ["nombre" => "Angela", "Apellido" => "Martinez", "Dni" => "57175975h"],
    ["nombre" => "Leire", "Apellido" => "Etxebarria", "Dni" => "77438975h"],
    ["nombre" => "Marta", "Apellido" => "Fernandez", "Dni" => "77148495h"],
];
?>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla generada desde PHP</title>
    <style>
        body{
            margin: 0;
            height: 100vh; /* Ocupa toda la altura de la ventana */
            display: flex; /* Contenedor flexible*/
            justify-content: center; /*Centra horizontalmente */
            align-items: center; /*Centra verticalmente*/
            background-color: #f9f9f9; /*Color de fondo general*/ 
        }
        .contenedor{
            background-color: #e0e0e0;/* Gris claro*/
            padding: 20px; /* espacio interno antes de mostrar el contenido */
            border-radius: 8px; /* redondeado esquinas */ 
            box-shadow: 0 0 10px rgba(0,0,0,0.2); /* sombra */
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }
        th,td{
            border: 1px solid #555;
            padding: 4px;
            text-align: center;
        }
        th{
            background-color: #d0d0d0;
        }
    </style>
</head>

<body>
    <div class="contenedor">
        <?php
            $respuesta = mostrarArrayEnTabla($usuarios);
            echo $respuesta;
        ?>
    </div>
</body>

</html>