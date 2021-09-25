<?php
    session_start();
    $nombreUsu = $_SESSION['userName'];

$ch = curl_init();

    $url = "localhost/proyectoWebII/controller/api/apiGet.php?usu=$nombreUsu";
    
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $resp = curl_exec($ch);

    $prodUsuRecibidos = json_decode($resp, true);
    
curl_close($ch);
?>
<!DOCTYPE html>
<head>
    <title>Zenith</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"> 
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../css/inicioStyle.css">
</head>
<body class="fondo">
<div class="container-fluid back">
    <div class="row cabecera">
        <div class="col-12 py-5">
            <h1 class="display-1 text-center" style="color: #F6F93F;">Zenith</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h2 class="display-4 text-center">Bienvenido a su pagina personal: <?php echo $prodUsuRecibidos[count($prodUsuRecibidos)-1]?></h2>
        </div>
    </div>
    <?php 
    echo "<div class='row'>";
    for( $i=0; $i<count($prodUsuRecibidos)-1; $i++ ){
        echo "<div class='col-12 col-md-6 col-lg-4 mt-2'>
                <div class='card-header text-center bg-warning'>
                    <p class='display-4'>" . $prodUsuRecibidos[$i]['Nombre'] . "</p>
                </div>
                <img src='../img/products/" . $prodUsuRecibidos[$i]['ImgProducto'] . "' class='img-fluid img-thumbnail'>
                <div class='card-body' style='background: #69F6E4'>
                    <h4 class='card-title'>" . $prodUsuRecibidos[$i]['Nombre'] . "</h4>
                    <article class='card-text'>
                        <p class='card-text'>Descrpcion: " . $prodUsuRecibidos[$i]['Descripcion'] . "</p>
                        <p class='card-text'>Disponible: " . $prodUsuRecibidos[$i]['Disponible'] . "</p>
                        <p class='card-text'>Direccion: " . $prodUsuRecibidos[$i]['Ciudad'] . " " . $prodUsuRecibidos[$i]['calle'] . "</p>
                    </article>
                </div>

                <div class='card-footer bg-info text-center'>
                    <p><h2>" . $prodUsuRecibidos[$i]['Precio'] . "Bs.</h2></p>
                </div>
              </div>";
    }

    echo "</div>";
?>
</div>
<!--Extensiones js offline-->
<script src="../js/bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
</body>
</html>