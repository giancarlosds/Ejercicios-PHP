<?php

$frutas = array("f"=>"Fresa","m"=>"Manzana","p"=> "Pera");
print_r($frutas);

echo $frutas["m"]."<br/>";

foreach($frutas as $indice=>&$valor){
    echo "El valor ".$valor. " tiene el índice: ".$indice."<br/>";
}

?>