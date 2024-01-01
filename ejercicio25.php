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

//Herencia
class trabajador extends Persona{
    public $puesto;

    public function presentarComoTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador(); //Creación de un objeto o una instancia.
$objTrabajador->asignarNombre("Giancarlos Diaz"); //llamando un método
$objTrabajador->puesto="Profesor";
$objTrabajador->presentarComoTrabajador();

?>