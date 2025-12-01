<?php
session_start();
$_POST['usuario']='Pepe';
/* $_POST['usuario']='admin'; */
$_POST['calve']='1234';
// Login simulado
echo "Usuario: ". $_POST['usuario'];
if ($_POST['usuario'] === 'admin' && $_POST['calve'] === '1234') {
    $_SESSION['usuario'] = $_POST['usuario'];
    session_regenerate_id(true); // Actualiza la sesion actual generando un nuevo id
    header('Location: dashboard.php'); //Envia el control al archivo dashboard.php
    exit;
}
