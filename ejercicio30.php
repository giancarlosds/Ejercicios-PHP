<?php
//Variables de sesión
session_start();

$_SESSION["usuario"]="giancarlosds";
$_SESSION["status"] = "logeado";

echo "Sesión iniciada <br/>";

echo "Usuario: ".$_SESSION["usuario"]." status: ".$_SESSION["status"];


?>