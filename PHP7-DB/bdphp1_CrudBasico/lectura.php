<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lectura en Base de datos</title>
</head>
<body>
  <h1>Nuestras noticias</h1>
  <?php
  // Conexion a la Base de Datos
  $host = "localhost";
  $user = "root"; // el genérico para mySql.
  $password = "";
  $database = "bd_noticias";
  $conexion = mysqli_connect($host, $user, $password, $database); // Establecemos la conexion con las variables
  if(!$conexion){
    echo "La conexion ha fallado<br>";
  } else {
    // Se ha producido la conexion correctamente
    // Creamos la sentencia SQL que selecciona todo de la tabla noticias
    $sql = "SELECT * FROM noticias";
    // ejecutamos la sentencia SQL y obtenemos todos los registros
    $resultado = mysqli_query($conexion, $sql);
    // print_r($resultado) devuelve: 
    // mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 2 [type] => 0 )

    // Obtenemos filas de resultados iterando sobre el array asociativo $resultado y guardandolo en un array asociativo $fila
    // Para eso usamos  mysqli_fetch_array (resultado de mysqli_query) 
    while ($fila = mysqli_fetch_array ($resultado)) {
      echo "<h2>" . $fila["titulo"] . "</h2>";
      echo $fila["contenido"] . "<br>";
      echo "<hr>"; 
      echo "<br>"; 
    } 
    //Libera la memoria asociada a un resultado
    mysqli_free_result($resultado);
    // Cierra la conexion
    mysqli_close($conexion);
  }
  ?>
  <a href ="index.php">Volver al Inicio</a>
</body>
</html>