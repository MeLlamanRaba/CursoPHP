<?php
//Detectar si hay datos en get o en post
$data= !empty($_POST) ? $_POST : (!empty($_GET) ? $_GET : null);
if ($data) {
    foreach ($variable as $key => $value) {
        // Sanitizar los valores para evitar XSS
        $$key=htmlspecialchars($value,ENT_QUOTES, 'UTF-8');
        //ENT_QUOTES -> Convierte tanto las comilla dobles como las simples
        /* NOTA: Con $$key...
            el primer $ indica que es una variable, y el segundo dice a PHP: "usa el contenido de $key como el nombre de la variable y el de $value como valor de la variable"
            -Por ejemplo: Si el formulario envia nombre=Luis, entonces:
                            - $key ="nombre"
                            - $$key = "Luis" -> Crea $nombre = "Luis" 
         */
    }
}