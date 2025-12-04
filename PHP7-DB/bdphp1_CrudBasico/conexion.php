<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "bd_noticias";
  // Conectamos a MySQL (la funcion die() imprime un mensaje y termina el script actual)
  $conexion = mysqli_connect($host, $user, $password) or die("Error al conectar con el servidor"); 
  // Seleccionamos la base de datos (añade a $conexion la base de datos sobre la que actuar)
  mysqli_select_db($conexion,$database) or die("Error al seleccionar la base de datos");
?>