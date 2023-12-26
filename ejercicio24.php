<?php

class Persona {
    public $nombre; //propiedades
    private $edad;//solo se puede acceder desde la clse que la definió.
    protected $altura;//solo se puede acceder desde la misma clase y clases heredadas

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

$objAlumno = new Persona(); //Creación de un objeto o una instancia.
$objAlumno->asignarNombre("Giancarlos"); //llamando un método

$objAlumno2 = new Persona();
$objAlumno2->asignarNombre("Anggie");

$objAlumno->imprimirNombre();
echo $objAlumno->mostrarEdad();
$objAlumno2->imprimirNombre();
echo $objAlumno2->mostrarEdad();

?>