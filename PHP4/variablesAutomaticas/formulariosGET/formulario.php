<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body style="background-color: #fbfdf7ff;">
    <header>
        <h1>Formulario GET</h1>
    </header>
    <main class="container my-5">
        <div class="card shadow">
            <div class="card-body" style="background-color: #e6f7fcff;">
                <form action="procesarGet_v2.php" method="get">
                    <!-- Nombre -->
                    <div class="mb-3">
                        <label class="form-label" for="nombre">Nombre:</label>
                        <input class="form-control" type="text" name="nombre" required>
                    </div>
                    <!-- Contraseña -->
                    <div class="mb-3">
                        <label class="form-label" for="password">Contraseña:</label>
                        <input class="form-control" type="password" name="password" required>
                    </div>
                    <!-- Desplegable con estado civil -->
                    <div class="mb-3">
                        <label for="estado">Estado civil: </label>
                        <select name="estado">
                            <option value="soltero">Soltero/a</option>
                            <option value="casado">Casado/a</option>
                            <option value="divorciado">Divorciado/a</option>
                            <option value="viudo">Viudo/a</option>
                        </select>
                    </div>
                    <!-- Seleccion tipo radio numero de hijos -->
                    <div class="mb-3">
                        <label>Numero de hijos</label>
                        <br>
                        <div class="row">
                            <div class="col-1">
                                <input type="radio" name="hijos" value="0" checked>0
                            </div>
                            <div class="col-1">
                                <input type="radio" name="hijos" value="1">1
                            </div>
                            <div class="col-1">
                                <input type="radio" name="hijos" value="2">2
                            </div>
                            <div class="col-1">
                                <input type="radio" name="hijos" value="+2">+2
                            </div>
                        </div>
                    </div>

                    <!-- Checkbox sobre aficiones -->
                    <div class="mb-3">
                        <label for="">Aficiones: </label>
                        <br>
                        <input type="checkbox" name="aficiones[]" value="informatica">
                        <label for="">Informatica</label>

                        <input type="checkbox" name="aficiones[]" value="musica">
                        <label for="">Musica</label>

                        <input type="checkbox" name="aficiones[]" value="deportes">
                        <label for="">Deportes</label>

                        <input type="checkbox" name="aficiones[]" value="otros">
                        <label for="">Otros</label>
                    </div>
                    <div class="mb-3">
                        <button type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>
</body>

</html>