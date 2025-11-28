<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Procesar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../../../assets/bootstrap-5.3.8/css/bootstrap.min.css"> -->
</head>

<body class="bg-light">

    <div class="container mt-5">
        <?php
        include "../extraerVars.php";
        $arrayGET_POST = extraerVariables();
        if (!$arrayGET_POST['error']) {
            echo '<div class="card shadow">';
            echo '  <div class="card-header bg-primary text-white">';
            echo '      <h4>Datos recibidos</h4>';
            echo '  </div>';
            echo '  <div class="card-body">';
            echo '      <p><strong>Nombre:</strong> ' . htmlspecialchars($arrayGET_POST['nombre']) . '</p>'; // htmlspecialchars() -> Convertir caracteres especiales en entidades HTML
            echo '      <p><strong>Contraseña:</strong> ' . htmlspecialchars($arrayGET_POST['password']) . '</p>';
            echo '      <p><strong>Estado civil:</strong> ' . htmlspecialchars($arrayGET_POST['estado']) . '</p>';
            echo '      <p><strong>Número de hijos:</strong> ' . htmlspecialchars($arrayGET_POST['hijos']) . '</p>';
            echo '      <p><strong>Aficiones:</strong></p>';
            echo '      <ul class="list-group list-group-flush">';
            foreach ($arrayGET_POST['aficiones'] as $aficion) {
                echo '          <li class="list-group-item">' . htmlspecialchars($aficion) . '</li>';
            }
            echo '      </ul>';

            echo '  </div>';
            echo '  <div class="card-footer text-center">';
            echo '      <a href="formulario.php" class="btn btn-secondary">Volver al formulario</a>';
            echo '  </div>';
            echo '</div>';
        } else {
            echo '<div class="alert alert-warning">' . $arrayGET_POST['message'].'</div>';
            echo '<a href="formulario.php" class="btn btn-secondary">Volver al formulario</a>';
        }
        ?>
    </div>

    <!-- Bootstrap JS (opcional, para componentes interactivos) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="../../../assets/bootstrap-5.3.8/js/bootstrap.bundle.min.js"></script> -->
</body>

</html>