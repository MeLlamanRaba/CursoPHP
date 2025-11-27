<?php
//conexion a la base de datos
include_once "conexion.php";

//leemos opcion pasada por la barra de direcciones
$opcion=$_GET['opcion'];

//leemos las variables enviadas desde el formulario
if(isset($_POST["titulo"]) && isset($_POST["contenido"])){
  $titulo=$_POST['titulo'];
  $contenido=$_POST['contenido'];
}

switch($opcion){

  // Insertar
  case 1:
    $sql = "INSERT INTO noticias (id, titulo, contenido) VALUES (NULL, '$titulo', '$contenido')";
    mysqli_query($conexion, $sql);
    echo"<h2>Se agregó la noticia</h2>";
    break;

  // Actualizar mediante id
  case 2:
    $id = $_POST['id'];
    $sql = "UPDATE noticias SET titulo = '$titulo', contenido = '$contenido'  WHERE id = '$id'" ;
    mysqli_query($conexion, $sql);
    echo"<h2>Se modifico la noticia . $titulo . </h2>";
    break;

    // Eliminar mediante id
  case 3:
    $id = $_GET['id'];
    $sql = "DELETE FROM noticias  WHERE id = '$id'";
    mysqli_query($conexion, $sql);
    echo"<h2>Se eliminó la noticia con id =  $id . correctamente </h2>";
    break;

  // Si no es una acción controlada
  default:
    echo "No se ha realizado ninguna opcion";
    break;
}

// Cerramos la conexión y volvemos al inicio
mysqli_close($conexion);
?>
<a href ="index.php">Volver al Inicio</a>