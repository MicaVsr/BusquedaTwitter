<!DOCTYPE html>
<html>
<head>
    <title>Buscar Tweets</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- ----------- -->

    <link rel="stylesheet" href="public/css/estilos.css">
    <!--<script src="public/js/funciones.js"></script>-->

</head>
<body>
    <?php include("public/header.html") ?>
    <main class="container">
        <section class="buscador">
            <nav class="navbar navbar-expand-sm navbar-light justify-content-center">
                <form class="form-inline" method="get" action="controller/buscar.php" id="barra-busqueda">
                    <input id="palabra" name="palabra" class="form-control mr-sm-2" type="text" placeholder="Buscar en Twitter">
                    <button class="btn btn-success" type="submit" id="buscar">Buscar</button>
                </form>
            </nav>
        </section>
    </main>
</body>
</html>