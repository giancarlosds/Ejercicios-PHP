<?php
//Funciones: son instrucciones que podemos usar varias veces.

function imprimirNombre($nombre, $apellido=""){
    //Rutinas o instrucciones
    echo "Hola ".$nombre." ".$apellido."<br/>";
}

//Llamar a la función
imprimirNombre("Giancarlos", "Diaz");
imprimirNombre("Anggie", "Diaz");
imprimirNombre("Bryam", "Diaz");

?>