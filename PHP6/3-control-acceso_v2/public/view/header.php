<?php
//Iniciar sesion si no esta ya iniciada
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso con sesiones y Bootstrap</title>
    <!-- Bootstrap.css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Fuentes para iconos -->
    <link href="https://cdnjs/cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <link href="../public/CSS/styles.css" rel="stylesheet">
</head>

<body>
    <!-- Botones de navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- navbar-expand-lg se utiliza para que la barra de navegación se expanda (muestra todos los elementos en una linea) en pantallas de tamaño lg y superiores mientras que en pantallas pequeñas se colapsa en un menu desplegable-->
        <div class="container-fluid"> <!-- Crea un contenedor de ancho completo que se adapta al ancho de la ventana del navegador. Responsive -->
            <ul class="navbar-nav me-auto mb-2 mg-lg-0"><!-- Se utiliza dentro de un componente navbar. Normalmente usado con listas.
                -Aplica estilos predefinidos para barra de navegacion a las listas
                -Coloca los elementos dentro de la barra en linea
                -Elimina los estilos propios de las listas -->
                <li class="nav-item"> <!-- Usado para marcar cada elemento individual dentro de un contenedor de navegacion (ej. nav.bar)
                    -Aplica margenes y paddings predefinidos para separar los elementos -->
                    <a class="nav-link" href="index.php">Home</a> <!-- Se aplica a '<a> --- </a>'  dentro del item, para darle estilo de enlace de navegacion-->
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="articulo.php">Artículos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">Contacto</a>
                </li>
                <li class="nav-item">
                    <?php if (isset($_SESSION['acceso']) && $_SESSION['acceso'] == 1):
                    ?>
                        <a class="nav-link" href="logout.php"> Cerrar sesion</a>
                    <?php else: ?>
                        <a class="nav-link" href="login.php"> Abrir sesion</a>
                    <?php endif ?>
                </li>
            </ul>
            <!-- Logo y texto alineados a la derecha -->
             <a class="navbar-brand ms-auto d-flex align-items-center" href="index.php">
                <!-- Texto a la izquierda del logo -->
                 <span class="me-3 fs-4">Just do it</span>
                 <!-- Imagen del logo -->
                 <img src="../public/images/Logo_NIKE.svg" alt="logo" width="67" class="d-inline-block align-text-top">
             </a>
        </div>
    </nav>

