<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Inicio de programa</h1>
    <?php
    $num = 20;
    $nombre = "Pepe";
    $valor1 = 10;
    $valor2 = 12;

    function muestraGlobal()
    {
        //Intentamos mostrar la variable global
        echo "$num <br>"; //Da error (variable fuera de ambito)
    }

    /* Las variables definidas dentro de una funcion tienen 
    ambito local.
    Solo pueden se accedidas desde dentro de la funcion
    y no existen fuera de ella. */

    function muestraVarLocal() {}
    //Mostramos las variables globales
    $valor = 10;
    echo "Mi valor es: $valor<br>";

    function muestraGlobal2()
    {
        global $num; //Con global indicamos que esa variable es global
        //para que la busque a nivel global y ser usada dentro
        //de la funcion
        echo "$num <br>"; //No da error
    }
    //Funcion que recibe una variable como parametro
    function muestraVariableEnviada($cadena)
    {
        echo "Hola $cadena <br>";
    }

    function suma()
    {

        global $valor1, $valor2;
        $valor1 = $valor1 + $valor2;
        echo "La suma es: $valor1 <br>";
    }

    function suma2($nro1, $nro2)
    {
        $nro1 = $nro1 + $nro2;
        echo "La suma es: $nro1 <br>";
    }

    //Ejecutamos las funciones
    //muestraVarGlobal(); //Nos da error por la variable
    //fuera de ambito
    muestraVarLocal();
    muestraGlobal2();
    muestraVariableEnviada($nombre);
    suma();
    suma2(1236, 245);
    suma2(23, 50);
    ?>
</body>

</html>