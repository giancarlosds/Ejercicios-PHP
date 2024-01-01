<?php
//Destrucción de variables de sesión
session_start();
session_destroy();

echo "Se destruyó la sesión de usuario";

?>