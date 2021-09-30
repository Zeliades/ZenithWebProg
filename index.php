<!DOCTYPE html>
<head>
    <title>Zenith</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/inicioStyle.css">
</head>
<body class="fondo">
    <div class="container-fluid back">
        <div class="row cabecera">
            <div class="col-12 py-5">
                <h1 class="display-1 text-center" style="color: #F6F93F;">Zenith</h1>
            </div>
        </div>

        <div class="row sticky-top navbar">
            <div class="col-12">
                <nav class="navbar navbar-expand-sm navbar-dark">
                    <a href="view/login.html" class="navbar-brand"><u>Ingresar</u></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#items">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="items">
                        <ul class="navbar-nav">
                        <li class="nav-item"><a href="controller/MuestraContenido.php?categoria=ves" class="nav-link">Vestimenta</a></li>
                        <li class="nav-item"><a href="controller/MuestraContenido.php?categoria=tec" class="nav-link">Tecnologia</a></li>
                        <li class="nav-item"><a href="controller/MuestraContenido.php?categoria=hog" class="nav-link">Hogar</a></li>
                        <li class="nav-item"><a href="controller/MuestraContenido.php?categoria=coc" class="nav-link">Cocina</a></li>
                        <li class="nav-item"><a href="controller/MuestraContenido.php?categoria=dep" class="nav-link">Deportes</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="row align-items-center justify-content-center pt-4 pb-3">
            <div class='col-10 col-md-5 col-lg-5'>
                <img src="img/landing.jpg" class="img-fluid img-thumbnail">
            </div>
            <div class='col-10 col-md-5 col-lg-5'>
                <p class="text-justify fuente">Zenith es un sitio con el fin de proporcionar a los usuarios un 
                   sitio agradable y adecuado para facilitar la divulgacion
                   de una amplia gamma de productos ofrecidos por los mismos
                   usuarios de la pagina y estos mismos productos sean mostrados
                   para el publico en general.</p>
            </div>
        </div>

        <div class="row bg-dark mt-2 py-4">
            <div class="col-12">
                <h2 class="display-4 text-center">Productos a su alcance</h2>
            </div>
        </div>
    </div>
<!--Extensiones js offline-->
<script src="js/bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>