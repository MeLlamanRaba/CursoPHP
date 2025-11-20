<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    nombre: <?php echo $_GET['nombre']; ?><br>
    cargo: <?php echo $_GET['cargo']; ?>

    <?php 
    var_dump($_GET);
    ?>
</body>

</html>