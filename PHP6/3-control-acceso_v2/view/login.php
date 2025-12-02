<?php
include_once '../public/view/header.php'; ?>
<!-- FORMULARIO DE ACCESO -->
<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow-lg" style="max-width:400px; width:100%">
        <div class="card-body">
            <h3 class="card-tittle texto-center mb-4">Acceso al sistema</h3>
            <form method="POST" action="procesar_login.php">
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuario: </label>
                    <input type="text" class="form-control" id="usuario" name="usuario" required>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña: </label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</div>