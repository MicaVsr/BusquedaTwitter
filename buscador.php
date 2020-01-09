<!DOCTYPE html>
<html>
<head>
    <title>Buscar Tweets</title>
    <?php include("public/head.html") ?>
    <link rel="stylesheet" href="public/css/estilos-buscador.css">
    <script src="public/js/funciones.js"></script>
</head>
<body>
    <?php include("public/header.html") ?>
    <main class="container">
        <section class="buscador">
            <input id="palabra" name="palabra" class="form-control" type="text" placeholder="Buscar en Twitter">
            <a class="btn btn-light" id="buscar"><img src="public/img/search.png"></a>
        </section>
        <section id="resultado_busqueda">
            <img class="flecha_buscador" src="public/img/flecha.png">
            <p class="titulo_busqueda">Ingrese una palabra para buscar tweets</p>
            <!-- RESULTADO -->
        </section>

    </main>
    <footer></footer>
</body>
</html>