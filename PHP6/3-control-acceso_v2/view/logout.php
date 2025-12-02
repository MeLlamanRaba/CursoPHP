<?php
//Iniciar sesion si no esta ya iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
session_unset(); //Elimina las variables de sesion actualmente registradas
session_destroy(); //Destruye toda la informacion asociada a una sesión
header("Location: index.php");
exit;