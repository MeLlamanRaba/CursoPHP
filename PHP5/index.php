<!DOCTYPE html>
<html lang="es">
<!-- EJERCICIO: Mediante cookies vamos a permitir a cada usuario personalizar fondo del mennu, fuente y color de letra
 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
    <style>
        .menuClass {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f9f9f9;
            /* Fondo claro */
            box-shadow: 0 2x 4px rgba(0, 0, 0, 0.1);
            /* Sombra sutil */
        }

        .menuClass ul {
            display: flex;
            justify-content: space-evenly;
            /* Distribucion uniforme */
            margin: 0;
            padding: 10px 0;
            list-style: none;
            /* Elimina los marcadores visuales (como viñetas, numeros) de los elementos de las listas */
        }

        #configPanel {
            position: fixed;
            top: 0;
            right: -340px;
            width: 300px;
            height: 50%;
            background-color: #eee;
            box-shadow: -2px 5px rgba(0, 0, 0, 0.3);
            padding: 20px;
        }

        #configPanel label {
            display: block;
            /* Fuerza que cada elemento ocupe su propia linea */
            margin-bottom: 15px;
        }

        #configPanel select {
            display: block;
            width: 100%;
            margin-top: 5px;
            padding: 5px;
        }

        #configPanel.open {
            right: 0;

        }
    </style>
</head>

<body>
    <?php include "configByForm.php" ?>
    <nav id="menu" class="menuClass">
        <button id="configBtn">Configuracion</button>
        <ul>
            <li>Inicio</li>
            <li>Servicios</li>
            <li>Contacto</li>
        </ul>
    </nav>

    <!-- Panel general -->
    <div id="configPanel">
        <h2>Panel de configuración</h2>
        <form method="POST">
            <label>Fuente:
                <select name="font">
                    <!-- <option value="Arial">Ariel</option> -->
                    <option value="Arial" <?php echo ($_COOKIE['font'] ?? '') === 'Arial' ? 'selected' : '' ?>>
                        Arial
                    </option>
                    <!-- 
                    $_COOKIE['font'] ?? '' -> Busca si existe una cookie llamada font
                        - Si existe, usa su valor
                        - Si no, usa una cadena vacía ('')
                    === 'Arial' ? 'selected' : '' -> Compara el valor de la cookie con arial
                        - Si coincide, añade la palabra si 'selected al html
                        - Si no, no la añade ('')
                    -->

                    <!-- <option value="Verdana">Verdana</option> -->
                    <option value="Verdana" <?php echo ($_COOKIE['font'] ?? '') === 'Verdana' ? 'selected' : '' ?>>
                        Verdana
                    </option>
                    <option value="Courier" <?php echo ($_COOKIE['font'] ?? '') === 'Courier' ? 'selected' : '' ?>>
                        Courier
                    </option>
                </select>
            </label>
            <label>Color de fondo:
                <select name="bgColor">
                    <option value="#ffffff" <?php echo ($_COOKIE['bgColor'] ?? '') === '#ffffff' ? 'selected' : '' ?>>Blanco</option>
                    <option value="#333333" <?php echo ($_COOKIE['bgColor'] ?? '') === '#333333' ? 'selected' : '' ?>>Oscuro</option>
                    <option value="#f0f0f0" <?php echo ($_COOKIE['bgColor'] ?? '') === '#f0f0f0' ? 'selected' : '' ?>>Gris Claro</option>
                </select>
            </label>
            <label>Color de texto:
                <select name="color">
                    <option value="#000000" <?php echo ($_COOKIE['color'] ?? '') === '#000000' ? 'selected' : '' ?>>Negro</option>
                    <option value="#ffffff" <?php echo ($_COOKIE['color'] ?? '') === '#ffffff' ? 'selected' : '' ?>>Blanco</option>
                    <option value="#ff6600" <?php echo ($_COOKIE['color'] ?? '') === '#ff6600' ? 'selected' : '' ?>>Naranja</option>
                </select>
            </label>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>
<script>
    /* Un script para mostrar u ocultar el menu de configuracion */
    document.getElementById("configBtn").addEventListener("click", () => {
        const panel = document.getElementById("configPanel");
        panel.classList.toggle("open"); //Alternativamente, incluye o quita la clase "open" en el elemento seleccionado
    })
</script>

</html>