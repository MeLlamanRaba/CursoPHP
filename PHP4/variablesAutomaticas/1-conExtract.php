<?php
// Es un metodo rapido aunque poco seguiro
// Pronblema: Puede sobreescribir variable que ya existen. (Ver comentario final)

// Detectar si hay datos get o post y extraer las variables

if (!empty($_GET)) {
    extract($_GET);
} elseif (!empty($_POST)) {
    extract($_POST);
}
// Ejemplo: Si recibes ?nombre=Luis&edad=35 tendras automaticamente
//$nombre="Luis" y $edad="35"

//AUMENTAMOS SEGURIDAD
/*
    Evitar sobreescribir variables ya definidas
        extract($_POST, EXT_SKIP);

    o añadir un sufijo a todas las variables extraidas automaticamente
        extract($_POST, EXTR_PREFIX_ALL, 'form');
        por ejemplo, de edad generará $form_edad=35
*/
