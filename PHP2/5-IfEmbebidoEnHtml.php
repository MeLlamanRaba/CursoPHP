<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Embebiendo PHP</title>
</head>

<body>
    <!-- Alternamos codigo html con PHP -->
    <?php
    $edad = 17; //Cambia la edad para ver alternativas
    if ($edad >= 18):
    ?>
        <p>Para votar pulsa <a href="votar.php">aqui</a></p>
    <?php
    else:
    ?>
        <p>No puedes votar aun. Eres menor de edad</p>
    <?php
    endif;
    ?>

</body>

</html>