<?php
//Conexión a la BD.
$servidor="localhost"; //127.0.0.1
$usuario="root";
$contrasenia="";

try{
    $conexion = new PDO("mysql:host=$servidor;dbname=album", $usuario, $contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la programacion', 'foto.jpg');";

    $conexion->exec($sql);

    echo "Conexion establecida";
}catch(PDOException $error){
    echo "Conexion erronea".$error;
}

?>