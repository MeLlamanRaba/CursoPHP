<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lectura en Base de datos</title>
  <!-- Cargamos JQUERY -->
  <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous">
  </script>
  <!-- Cargamos DATATABLES -->
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <!-- Inicialización de DataTables -->
  <script>
    $(document).ready(function() {
      $('#mitabla').DataTable({
        select: true,
        language: { // seleccionamos el lenguaje a usar en los menus
          url: 'https://cdn.datatables.net/plug-ins/1.12.1/i18n/es-ES.json',
        }
      });
    });
  </script>
</head>

<body>
  <h1>Nuestras noticias</h1>
  <table id="mitabla" class="display"> <!-- Ver https://www.datatables.net/manual/installation -->
    <thead>
      <tr>
        <th>ID</th>
        <th>Titulo</th>
        <th>Contenido</th>
        <th>Fecha</th>
        <th>Imagen</th>
      </tr>
    </thead>

    <?php
    // Conexion a la Base de Datos
    $host = "localhost";
    $user = "root"; // el genérico para mySql.
    $password = "";
    $database = "bd_noticias";
    $conexion = mysqli_connect($host, $user, $password, $database); // Establecemos la conexion con las variables
    if (!$conexion) {
      echo "La conexion ha fallado<br>";
    } else {
      // Se ha producido la conexion correctamente
      // Creamos la sentencia SQL que selecciona todo de la tabla noticias
      $sql = "SELECT * FROM noticias";
      // ejecutamos la sentencia SQL y obtenemos todos los registros
      $resultado = mysqli_query($conexion, $sql);
      echo "<tbody>";
      // print_r($resultado) devuelve: 
      // mysqli_result Object ( [current_field] => 0 [field_count] => 3 [lengths] => [num_rows] => 2 [type] => 0 )

      // Obtenemos filas de resultados iterando sobre el array asociativo $resultado y guardandolo en un array asociativo $fila
      // Para eso usamos  mysqli_fetch_array (resultado de mysqli_query) 
      while ($fila = mysqli_fetch_array($resultado)) {
        echo "<tr>"; //Inicio de la linea
        /* COLUMNAS */
        echo "<td>" . $fila["id"] . "</td>";
        echo "<td>" . $fila["titulo"] . "</td>";
        echo "<td>" . $fila["contenido"] . "</td>";
        echo "<td>" . $fila["fecha"] . "<br>";
        /* FIN DE COLUMNAS */
        echo "</tr>"; //Cierre de la linea
      }
      echo "<tbody>";
      //Libera la memoria asociada a un resultado
      mysqli_free_result($resultado);
      // Cierra la conexion
      mysqli_close($conexion);
    }
    ?>
  </table>
  <br>
  <a href="index.php">Volver al Inicio</a>
</body>

</html>