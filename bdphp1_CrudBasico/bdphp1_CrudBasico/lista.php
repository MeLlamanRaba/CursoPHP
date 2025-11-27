<?php
  //Conexion a Base de Datos
  include_once "conexion.php";
?>
<body>
  <h1>Lista de mantenimiento</h1>
  <?php
    $sql ="SELECT * FROM noticias";
    // En $resultado guardamos el resultado de la sentencia SQL ejecutada con mysqli_query
    $resultado = mysqli_query($conexion, $sql); 
    // Con mysqli_fetch_array vamos obteniendo las filas de resultados y guardandolos en un array asociativo ($fila)
    // Cada llamada posterior a esta función retornará la siguiente fila en el conjunto de resultados, o null si no hay más filas.
    while ($fila=mysqli_fetch_array($resultado)) {
      echo "<h2>" . $fila["titulo"] . "</h2>";
      echo $fila["contenido"] . "<br>";
      echo "<a href=formulario.php?id=" . $fila["id"] . ">Actualizar</a> ";
      echo "<a href=accion.php?id=" . $fila["id"] . "&opcion=3>Eliminar</a>";
      echo "<hr>";
      echo "<br>";
    }
    mysqli_free_result($resultado);
    mysqli_close($conexion);
  ?>
</body>