<?php
    session_start();
    $prodUsuRecibidos = $_SESSION['personalProducts'];
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

        <?php 
        echo "<div class='row'>";
        foreach($prodUsuRecibidos as $prod){
            echo "<div class='col-12 col-md-6 col-lg-4 mt-2'>
                    <div class='card-header text-center bg-warning'>
                        <p class='display-4'>" . $prod['Nombre'] . "</p>
                    </div>
                    <img src='data:image/jpeg; base64," . base64_encode($prod['ImgProducto']) . "' class='img-fluid img-thumbnail'>
                    <div class='card-body' style='background: #69F6E4'>
                        <h4 class='card-title'>" . $prod['Nombre'] . "</h4>
                        <article class='card-text'>
                            <p class='card-text'>Descrpcion: " . $prod['Descripcion'] . "</p>
                            <p class='card-text'>Disponible: " . $prod['Disponible'] . "</p>
                            <p class='card-text'>Direccion: " . $prod['Ciudad'] . " " . $prod['calle'] . "</p>
                        </article>
                    </div>

                    <div class='card-footer bg-info text-center'>
                        <p><h2>" . $prod['Precio'] . "Bs.</h2></p>
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