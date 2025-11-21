<?php
//Foreach se usa principalmente para iterar  arrays y objetos

//Array indexado (simple)
//Capturamos el contenido usando indices de 0 a n-1
//Ej. $array[2]
$numeros = [1, 2, 3, 4];
//Asociativo se compone de clave=>valor;
//Capturamos el contenido usando la clave $array[clave]
$valores = ["Uno" => 1, "Dos" => 2, "Tres" => 3];

echo "<h2>Recorremos un array indexado (simple)</h2>";
foreach ($numeros as $numero) {
    echo "Número: " . $numero . "<br>";
}

//Recorremos un array asociativo
echo "<h2>Recorremos un array aociativo</h2>";
foreach ($valores as $clave => $valor) {
    echo "Clave: " . $clave . " - Valor: " . $valor . "<br>";
}

//Recorrer un objeto

//Creamos la clase
class Persona
{
    public $nombre;
    public $edad;
    public $dni;
    public $sexo;

    public function __construct($nombre, $edad, $dni, $sexo)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->dni = $dni;
        $this->sexo = $sexo;
    }
}

//Creamos varios objetos
/* array $persona sera:
     $persona = 
     [
        'persona_0' => 0{objeto1},
        'persona_1' => 1{objeto2},
        'persona_2' => 2{objeto3}
    ]
Y cada objeto que se guarda en cada valor de cada clave del array
    {
        nombre: valorNombre, 
        edad: valorEdad, 
        dni: valorDni, 
        sexo: valorSexo
    }
 */
$persona["persona_0"] = new Persona("Juan", 21, "22333666A", "hombre");
$persona["persona_1"] = new Persona("Diego", 45, "27532323C", "hombre");
$persona["persona_2"] = new Persona("Maria", 32, "47283726P", "mujer");

echo "<h2>Recorremos un objeto</h2> <br>";
foreach ($persona as $clavePersona => $objetoPersona) {
    echo "<h3>Datos de la " . $clavePersona . "</h3>";
    foreach ($objetoPersona as $claveObjeto => $campoObjeto) {
        //ucfirst() convierte la primera letra en mayusculas
        echo  ucfirst($claveObjeto) . ": " . $campoObjeto . " <br>";
    }
}
