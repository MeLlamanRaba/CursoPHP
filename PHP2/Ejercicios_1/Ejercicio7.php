<!-- Ejecuta este código y responde:-->


<?php
$haceFrio = 15;
$respuesta = "";
$temperatura = ($haceFrio < 20) ? $respuesta = "Hace frio" : $respuesta = "No ha
ce frio";
echo $respuesta;
?>
<!-- 
a) ¿Qué resultado se obtiene por pantalla?
Hace frio
b) Modifica el código sustituyendo el operador ternario por if else para que el resultado obtenido sea el mismo.-->
<?php
$haceFrio = 15;
if ($haceFrio < 20) {
    echo "Hace frio";
} else {
    echo "No hace frio";
}
?>