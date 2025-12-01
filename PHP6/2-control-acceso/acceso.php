<?php
// Estructura básica de acceso a sesiones
$usuario = $_POST['usuario'];
$password = $_POST['password'];

/* strcmp(cadena1, cadena2) -> Compara dos cadenas de texto de forma binaria y sensible a mayusculas y minisculas. 
Si devuelve 0 son exactamente iguales
Si devuelve 1 la cadena 1 es mayor
Si devuelve -1 la cadena 1 es menor
*/
if (strcmp($usuario, "admin") == 0 && strcmp($password, "1234") == 0) {
    session_start();
    echo "id_sesion: " . session_id() . '<br>';
    echo "nombre_sesion: " . session_name() . '<br>';
    $_SESSION["acceso"] = "1";
    echo '<p> Acceso autorizado </p>';
    echo '<a href="privado.php">Acceso a información privada </a>';
} else {
    echo "<p> Acceso no autorizado </p>";
    echo '<a href="inicio.php">Volver a página de inicio </a>';
}
