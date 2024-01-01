<?php

class UnaClase{
    //Metodo estático
    public static function unMetodo(){
        echo "Hola soy un método estático";
    }
}

$obj=new UnaClase();
$obj->unMetodo();

//invocar un método estático.
UnaClase::unMetodo();

?>