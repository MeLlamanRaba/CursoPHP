<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables super globales</title>
</head>

<body>
    <?php
    //Las variables super globales son arryas asociativos
    //que estan disponibles en todo los ambitos
    //Las mas comune: $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE
    //entre otras

    //Ejemplo con variable superglobal
    echo "Nombre del user agent: $_SERVER[HTTP_USER_AGENT] <br>";
    echo "<br>";
    echo "Nombre del servidor: $_SERVER[SERVER_NAMDE] <br>";
    echo "Direccion IP del servidor: $_SERVER[REMOTE_ADOR] <br>";

    //Definimos varias globales
    $nombre = "Fernando";

    echo $GLOBALS['nombre'];
    //var_dump se usa para mostrar informacion de variables y arrys
    var_dump($GLOBALS);

    function mostrarNombre()
    {
        //global $nombre;
        echo "$nombre"; //ERROR . $nombre no esta definido en este ambito
        echo $GLOBALS['nombre']; //Ok con $GLOBALS accedemos al valor global
    }
    mostrarNombre();
    ?>

</body>

</html>