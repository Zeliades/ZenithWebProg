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
        <div class="col-12 text-center">
            <h2 class="display-4">Articulos personales de <?php echo $prodUsuRecibidos[count($prodUsuRecibidos)-1]?></h2>
        </div>
    </div>

    <div class="row no-gutters bg-success text-center text-dark mx-2">
        <div class="col-2 border border-dark">
            Nombre
        </div>
        <div class="col-2 border border-dark">
            Descripcion
        </div>
        <div class="col-1 border border-dark">
            Precio
        </div>        
        <div class="col-1 border border-dark">
            Ciudad
        </div>
        <div class="col-2 border border-dark">
            Calle
        </div>
        <div class="col-1 border border-dark">
            Dispon
        </div>
        <div class="col-2 border border-dark">
            Imagen
        </div>
        <div class="col-1 border border-dark">
            Accion
        </div>
    </div>

    <?php
    for( $i=0; $i<count($prodUsuRecibidos)-1; $i++ ){
      $color = ($i%2==0)? "bg-secondary" : "bg-info";  
      echo "<div class='row no-gutters align-items-center $color py-1 mx-2'>";
        echo "<div class='col-2 text-light'>". 
                  $prodUsuRecibidos[$i]['Nombre']."
              </div>
              <div class='col-2 text-light'>".
                  $prodUsuRecibidos[$i]['Descripcion']."
              </div>
              <div class='col-1 text-light text-center'>".
                  $prodUsuRecibidos[$i]['Precio']."
              </div>        
              <div class='col-1 text-light text-center'>".
                  $prodUsuRecibidos[$i]['Ciudad']."
              </div>
              <div class='col-2 text-light text-center'>".
                  $prodUsuRecibidos[$i]['calle']."
              </div>
              <div class='col-1 text-light text-center'>".
                  $prodUsuRecibidos[$i]['Disponible']."
              </div>
              <div class='col-2 text-light text-center'>
                  <img src='../img/products/" . $prodUsuRecibidos[$i]['ImgProducto'] . "' class='imgCrud'>
              </div>
              <div class='col-1 text-light text-center'>
                  <button class='botonazo'>Editar</button>
                  <button class='botonazo'>Borrar</button>
              </div>";
      echo "</div>";
    }
    ?>
    <div class="row bg-dark mt-2 py-4">
        <div class="col-12">
            <h2 class="display-4 text-center">Este es un footer</h2>
        </div>
    </div>
</div>
<!--Extensiones js offline-->
<script src="../js/bootstrap/jquery-3.5.1.slim.min.js"></script>
<script src="../js/bootstrap/popper.min.js"></script>
<script src="../js/bootstrap/bootstrap.min.js"></script>
</body>
</html>