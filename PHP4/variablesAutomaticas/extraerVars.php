<?php

/**
 * Extrae variables de un formulario enviadas por GET o POST
 * 
 * @return array  Un array con las variables extraidas y mensajes de estado
 */
function extraerVariables()
{
    // Detectar si hay datos en GET o POST
    $data = !empty($_POST) ? $_POST : (!empty($_GET) ? $_GET : null);
    //Inicializamos un array
    $varsForm = [];

    try {
        if ($data) {
            foreach ($data as $key => $value) {
                // Sanitizar los valores para evitar XSS
                $varsForm[$key] =$value;
            }
            // Campos de control en caso de exito
            $varsForm["error"] = false;
            $varsForm["message"] = "El array de datos GET/POST se ha creado correctamente";
        } else {
            //No hay datos en GET no POST
            $varsForm["error"] = true;
            $varsForm["message"] = "No se recibieron datos desde GET ni POST";
        }
    } catch (Exception $e) {
        //Captura de errores inesperados
        $varsForm = [
            'error' => true,
            'message' => "Error al crear variables: " . $e->getMessage()
        ];
    }
    return $varsForm;
}

/* LLAMAMOS A LA FUNCION DESDE EL EXTERIOR
include "ruta/extraerVars.php"

$arrayGET_POST=extraerVariables();
print_r($arrayGET_POST);
*/