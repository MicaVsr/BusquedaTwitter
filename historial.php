<!DOCTYPE html>
<html>
<head>
    <title>Historial</title>
    <link rel="stylesheet" href="public/css/estilos-historial.css">
    <?php include("public/head.html") ?>
</head>
<body>
<?php include("public/header.html") ?>
<main class="container">
    <section class="historial_busquedas">
        <h3>Historial de búsquedas</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Reciente</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody id="historial">
                <!-- RESULTADO -->
            </tbody>
        </table>
    </section>
    <script src="public/js/funciones-historial.js"></script>
</main>
</body>
</html>