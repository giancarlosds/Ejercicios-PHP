<?php 
    $jsonContenido = '[
        {"nombre":"Giancarlos", "apellido":"Diaz"},
        {"nombre":"Anggie", "apellido":"Diaz"}
    ]';
    $resultado = json_decode($jsonContenido);
    //print_r($resultado);

    foreach($resultado as $persona){
        echo ($persona->nombre)." ".($persona->apellido)."<br/>";
    }
?>