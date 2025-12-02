<?php
//Array de usuarios y contraseñas donde la clave va a ser el nombre del usuario y la contraseña va a ser el valor
$users = [
    "admin" => 1234,
    "user1" => "abcd",
    "user2" => "xyz"
];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$login_ok = false;
foreach ($users as $user => $passw) {
    if (strcmp($usuario, $user) == 0 && strcmp($password, $passw) == 0) {
        $login_ok = true;
        break;
    }
}
//Procesar resultado del login
if ($login_ok) {
    // Al ser un login correcto, aqui decido a que página envio el control
    //Iniciar sesion si no esta ya iniciada
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    echo "id_sesion: " . session_id() . '<br>';
    echo "nombre_sesion: " . session_name() . '<br>';
    $_SESSION["acceso"] = "1";
    $_SESSION["usuario"] = $usuario;
    echo "<p>Acceso autorizado</p>";
    echo "<a href='index.php'>Acceso a información privada</a>";
} else {
    echo "<p>Acceso no autorizado</p>";
    echo "<a href='index.php'>Volver a pagina de inicio</a>";
}
