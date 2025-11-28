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
            background-color: #f9f9f9; /* Fondo claro */
            box-shadow: 0 2x 4px rgba(0,0,0,0.1); /* Sombra sutil */
        }

        .menuClass ul{
            display:flex;
            justify-content: space-evenly; /* Distribucion uniforme */
            margin: 0;
            padding: 10px 0;
            list-style: none; /* Elimina los marcadores visuales (como viñetas, numeros) de los elementos de las listas */
        }
    </style>
</head>

<body>
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
        <form action="configform" method="post">
            <label>Fuente:
                <select name="font">
                    <option value="Arial">Ariel</option>
                    <option value="Verdana">Verdana</option>
                    <option value="Courier">Courier</option>
                </select>
            </label>
            <label>Color de fondo:
                <select name="bgColor">
                    <option value="#ffffff">Blanco</option>
                    <option value="#333333">Oscuro</option>
                    <option value="#f0f0f0">Gris Claro</option>
                </select>
            </label>
            <label>Color de texto:
                <select name="color">
                    <option value="#000000">Negro</option>
                    <option value="#ffffff">Blanco</option>
                    <option value="#ff6600">Naranja</option>
                </select>
            </label>
            <button type="submit">Guardar</button>
        </form>
    </div>
</body>

</html>