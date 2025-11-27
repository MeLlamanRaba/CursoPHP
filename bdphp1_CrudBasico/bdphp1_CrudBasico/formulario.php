<?php
//conexion a la base de datos
include_once "conexion.php";
?>
<body>
  <h1>Formulario de actualizacion</h1>
  <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM noticias WHERE id='$id'";
    $resultado = mysqli_query($conexion, $sql);
    $fila = mysqli_fetch_array($resultado);
  ?>
  <form action="accion.php?opcion=2" method="post">
  <input type="hidden" name="id" value="<?php echo $id;?>">
    <p>Titulo</p>
    <input type="text" name="titulo" value="<?php echo $fila['titulo'];?>">
    <p>Contenido</p>
    <textarea name="contenido" cols="30" rows="10" >
      <?php echo $fila['contenido'];?>
    </textarea>
    <p>
      <input type="submit" value="Actualizar noticia">
    </p>
  </form>
</body>