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

        <div class='col-12 col-md-6 col-lg-4 mt-2'>
            <div class='card-header text-center bg-warning'>
                <p class='display-4'>HP Pavillion</p>
            </div>
            <img src='img/pavillion.jpg' class='img-fluid img-thumbnail'>
            <div class='card-body' style='background: #69F6E4'>
                <h4 class='card-title'>HP Pavillion</h4>
                <article class='card-text'>
                    <p class='card-text'>Descrpcion: 15 in i7 12Ram 1TB Rigido Win 11</p>
                    <p class='card-text'>Disponible: Si</p>
                    <p class='card-text'>Direccion: La Paz Eloy Salmon 4324</p>
                </article>
            </div>
            
            <div class='card-footer bg-info text-center'>
                <p><h2>Bs.6500</h2></p>
            </div>
        </div>
    </div>
<!--Extensiones js offline-->
<script src="js/bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap/popper.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
</body>
</html>