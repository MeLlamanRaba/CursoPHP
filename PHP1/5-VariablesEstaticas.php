<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables estaticas</title>
</head>
<body>
    <?php
    function contador(){
        //La variable estatica conserva su valor entre
        //llamadas a la funcion
        static $contadorEstatico = 0;
        $contadorNoEstatico = 0;

        /* $contadorEstatico = $contadorEstatico + 1; */
        $contadorEstatico++; //incrementa en 1
        $contadorNoEstatico++; //incrementa en 1

        echo "Contador estatico: $contadorEstatico <br>";
        echo "Contador no estatico: $contadorNoEstatico <br><br>";
    }
    contador();
    contador();
    contador();

    ?>
</body>
</html>