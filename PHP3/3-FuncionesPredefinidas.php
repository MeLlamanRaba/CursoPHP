<?php
/* 
array_diff(): compara un array con otro
SINTAXIS: arraydiff($array_1, $array_2, ...$array_n):arrray
    · $array1 -> El array base (del que se extraen los valores) 
    · $array2, ...$array_n -> Array con los que se compara
    · Retorno -> Un array nuevo con los elementos del primer array que NO ESTEN en los otros
- Devuelve un NUEVO array con los elementos del primer array que NO ESTEN en los otros
*/
$numeros1 = [11, 22, 33];
$numeros2 = [11, 33, 55];
// $arr = array(13,43,50); otra forma de crear arrays

$diferencias = array_diff($numeros1, $numeros2);
echo "<h2>INFORMACION DE LA DIFERENCIA ENTRE ARRAYS:</h2>";
print_r($diferencias);
echo "<br>";

//Con arrays asociativos... funciona igual
$colores1 = ["color1" => "rojo", "color2" => "verde", "color3" => "naranja"];
$colores2 = ["color1" => "verde", "color2" => "azul", "color3" => "amarillo"];
echo "<h2>INFORMACION DEL ARRAY ASOCIATIVO:</h2>";
$diferencias2 = array_diff($colores1, $colores2);
print_r($diferencias2);
echo "<br>";

/* array_merge(): Combina un array con otro/s, devolviendo un nuevo array
* Los vakires de uno se incluyen al final del anterior.
* OJO: en los asociativos, si la clave existe en los dos, el segundo "pisa" al primero */
$a1 = ["rojo", "verde"];
$a2 = ["azul", "amarillo"];
echo "<h2>INFORMACION DEL ARRAY UNIDO:</h2>";
$unido = array_merge($a1, $a2);
print_r($unido);
echo "<br>";

// con un asociativo...
$unido = array_merge($colores1, $colores2);
print_r($unido);
echo "<br>";

/*  sort($array): Ordena los valores de menor a mayor, modificando el propio array
    SINTAXIS: sort(&$array):bool */
echo "<h2>sort(&\$array):</h2>";
$dias = ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo"];

//Pintamos el array original antes de ordenarlo
echo "Array";
print_r($dias);
echo "<br>";

// Ordenamos el array
$exito = sort($dias);
print_r($dias);
echo "<br>";

// ordenar de forma inversa
$exito = rsort($dias);
print_r($dias);
echo "<br>";

/* 
SINTAXIS: asort(array &$array, int $flags = SORT_REGULAR): bool
asort(&$array): Ordena los valores de un arrray de forma ascendente manteniendo la correlacion de las claves del array con los elementos que estan asociados
Retorna true o false en funcion de si ha tenido exito o no 

Para ordenar de manera inversa
SINTAXIS:  rsort(array &$array, int $flags = SORT_REGULAR): bool*/
$nombresEdad = ["Javier" => 29, "Patricia" => 28, "Emilio" => 26];
echo "<h2>INFORMACION DE ASORT():</h2>";
asort($nombresEdad);
print_r($nombresEdad);
echo "<br>";

/* 
suffle(&$array): Orden aleatorio de los elementos de un array
-Modifica el propio array
SINTAXIS: shuffle(array &$array): bool
OJO: SI es un array asociativo no conserva las claves. Se convierte en indexado.
*/
echo "<h2>suffle() -- Tirando un dado</h2>";
$dado = [1, 2, 3, 4, 5, 6];
$contador = 1;
//Repetir la tirada hasta que salga un 6
while ($dado[0] != 6) {
    shuffle($dado); //Tiramos el dado
    echo "Jugada $contador: $dado[0] <br>"; // Pintamos la jugada
    $contador++; // Incrementamos el contador en 1
}

//FUNCIONES DE INSERCION Y BORRADO
//array_combine(): Crea un nuevo array usando los valores del primer array como claves y los del segundo array como valores
echo "<h2>array_combine(\$keys, \$values)</h2>";
$keys = ["Verde", "Rojo", "Amarillo"];
$values = ["Green", "Red", "Yellow"];

$combinado = array_combine($keys, $values);
echo "Array generado por la combinacion: <br>";
print_r($combinado);

/* array_values($array) Devuelve todos los valores de un array asociativo 
    Genera un nuevo array indexado
*/
echo "<h2>array_values(\$array): array</h2>";
$parametros = ["ancho" => "XL", "color" => "rojo"];
print_r(array_values($parametros));
echo "<br>";

/* array_count_values($array):array
    Cuenta el numero de veces que se repite un valor en un array asociativo
    El valor pasa a ser la clave con un valor = al numero de veces que se repite.
    Solo funciona con string e int
    SINTAXIS: array_count_values(array $array): array
*/
echo "<h2>array_count_value( array \$array): array</h2>";
$array =[1, "Hello",1, "word", "Hello"];
print_r(array_count_values($array));

/* count($array): Devuelve el numero de elementos que contiene un array
    SINTAXIS: count($array): int */

echo "<h2>array_count(\$array): int</h2>";
$frutas=["Manzana","Pera","Naranja"];
$numeroElementos= count($frutas);
echo"El numero de frutas en el array es: $numeroElementos";