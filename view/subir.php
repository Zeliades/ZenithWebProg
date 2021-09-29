<?php
    $idProd = $_GET['PROD'];
    $idUsu = $_GET['USUA'];
    $prodNombre = $_GET['nomb'];
    $prodDesc = $_GET['desc'];
    $prodPrec = $_GET['prec'];
    $prodCiud = $_GET['ciud'];
    $prodCall = $_GET['call'];
    $prodDispon = $_GET['disp'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zenith</title>
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

    <!--Formulario culero-->
    <div class="row">
        <div class="col-12 text-center">
            <form action='../controller/ActualizaProducto.php' method="post" enctype="multipart/form-data" >
                <input type="text" name="nom" value="<?php echo $prodNombre;?>">
                <input type="text" name="des" value="<?php echo $prodDesc;?>">
                <input type="text" name="pre" value="<?php echo $prodPrec;?>">
                <input type="text" name="ciu" value="<?php echo $prodCiud;?>">
                <input type="text" name="cal" value="<?php echo $prodCall;?>">
                <input type="text" name="dis" value="<?php echo $prodDispon;?>">
                <input type="hidden" name="idUsu" value="<?php echo $idUsu;?>">
                <input type="hidden" name="idProd" value="<?php echo $idProd;?>">
                <input type="file" name="patata" id="patata" accept="image/png,image/jpg,image/jpeg">
                <input type="submit" value="Apashurrale">
            </form>
        </div>
    </div>
    <!--Fin del formulario culero-->
</div>
</body>
</html>