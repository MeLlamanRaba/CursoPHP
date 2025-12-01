<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    //Si vienen por POST creamos o actualizamos las cookies con el contenido recibido por POST
    setcookie('bgColor', $_POST['bgColor'], time() + (86400 * 30), "/");
    /* 24h x 30 = un mes de duración
        El parametro "/" indica que la cookie estara disponible en todo el sitio.
    */
    setcookie('font', $_POST['font'], time() + (86400 * 30), "/");
    setcookie('color', $_POST['color'], time() + (86400 * 30), "/");
    header("Location: " . $_SERVER['PHP_SELF']);
}
$font = $_COOKIE['font'] ?? 'Arial';
$bgColor = $_COOKIE['bgColor'] ?? '#ffffff';
$color = $_COOKIE['color'] ?? '#000000';
?>
<style>
    #menu {
        /* LE DAMOS ESTILOS MEDIANTE ID AL MENU */
        /*< ? =  ? > es una forma de expresar < ? php echo ... ?> */
        font-family: <?= htmlspecialchars($font) ?>;
        background-color: <?= htmlspecialchars($bgColor) ?>;
        color: <?= htmlspecialchars($color) ?>;
    }
</style>