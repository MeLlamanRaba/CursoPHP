<?php
class Persona
{
    //Atributos
    public $nombre;
    public $apellido;
    public $edad;

    //Constructor de la clase Persona
    public function __construct($nombre, $apellido, $edad)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
    }

    //Metodo para que la persona se presente
    public function presentarse()
    {
        return "Hola, mi nombre es " . $this->nombre . " " . $this->apellido . " y tengo " . $this->edad . " años. <br>";

    }
    public function componer(){
        echo "La persona " . $this->nombre . " está componiendo una canción. <br>";
    }
}
//Crear un objeto de la clase Persona
$persona1 = new Persona("Juan", "Pérez", 30);
$persona2 = new Persona("María", "Gómez", 25);
 
//Llamamos a los metodos del objeto
echo $persona1->presentarse();
echo $persona2->componer();
?>