<?php
/* Ejecutar en caso de no tener creada la base de datos */

$host = "localhost";
$user = "root";
$password = "";
$database = "bd_noticias";

// Conexión inicial sin seleccionar base de datos
$conexion = mysqli_connect($host, $user, $password);
if (!$conexion) {
    die("Error al conectar con el servidor: " . mysqli_connect_error());
}

// Verificar si la base de datos existe
/* $db_check = mysqli_select_db($conexion, $database); */
        
if (!$db_check) {
    // Crear la base de datos si no existe
    $crear_db = "CREATE DATABASE $database";
    if (mysqli_query($conexion, $crear_db)) {
        echo "Base de datos '$database' creada correctamente.<br>";
    } else {
        die("Error al crear la base de datos: " . mysqli_error($conexion));
    }
}

// Seleccionar la base de datos (ya existe o recién creada)
mysqli_select_db($conexion, $database);

// Verificar si la tabla 'noticias' existe
$tabla_check = mysqli_query($conexion, "SHOW TABLES LIKE 'noticias'");
if (mysqli_num_rows($tabla_check) == 0) {
    // Crear la tabla 'noticias'
    $crear_tabla = "
        CREATE TABLE noticias (
            id INT AUTO_INCREMENT PRIMARY KEY,
            titulo VARCHAR(255) NOT NULL,
            contenido TEXT NOT NULL,
            fecha TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )
    ";
    if (mysqli_query($conexion, $crear_tabla)) {
        echo "Tabla 'noticias' creada correctamente.<br>";
    } else {
        die("Error al crear la tabla: " . mysqli_error($conexion));
    }
} else {
    echo "La tabla 'noticias' ya existe.<br>";
}

mysqli_close($conexion);
