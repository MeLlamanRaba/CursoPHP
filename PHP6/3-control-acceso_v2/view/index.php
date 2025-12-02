<?php
//Iniciar sesion si no esta ya iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

//Verificar si el usuario esta logueado
if (!isset($_SESSION['acceso']) || $_SESSION['acceso'] != 1) {
    //Redirigir a login 
    header("Location: login.php");
    exit();
}

include_once '../public/view/header.php';
?>
<!-- CONTENIDO PRINCIPAL -->
<div class="container mt-5">
    <div class="text-center">
        <h1 class="mb-4">Bienvenido al sistema</h1>
        <p class="lead">Hola <strong><?php echo htmlspecialchars($_SESSION['usuario']); ?></strong>, has iniciado la sesion correctamente</p>
        <p>Desde aqui puedes acceder a los articulos, la sección de contacto o cerrar la sesión</p>
    </div>
</div>
<?php include_once '../public/view/footer.php' ?>