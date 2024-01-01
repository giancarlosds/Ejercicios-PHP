<?php

class Persona {
    public $nombre; //propiedades
    private $edad;//solo se puede acceder desde la clse que la definió.
    protected $altura;//solo se puede acceder desde la misma clase y clases heredadas

    //Creación de método constructor.
    function __construct($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre){ //acciones o métodos...
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre(){
        echo "Hola soy ".$this->nombre."<br/>";
    }
    public function mostrarEdad(){
        $this->edad = 20;
        return $this->edad."<br/>";
    }
}

$objAlumno = new Persona("Giancarlos Diaz"); //Creación de un objeto o una instancia.
//$objAlumno->asignarNombre("Giancarlos"); //llamando un método
$objAlumno->imprimirNombre(); 


?>