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

    <div class="row formulario">
        <div class="col-12 text-center">
            <form action='../controller/ActualizaProducto.php' method="post" enctype="multipart/form-data" >
                <div class="col-12">
                    <label for="nom">Nombre del producto</label><br>
                    <input type="text" name="nom" id="nom" value="<?php echo $prodNombre;?>">
                </div>
                <div class="col-12">
                    <label for="des">Descripcion del producto</label><br>
                    <input type="text" name="des" id="des" value="<?php echo $prodDesc;?>">
                </div>
                <div class="col-12">
                    <label for="pre">Precio</label><br>
                    <input type="text" name="pre" id="pre" value="<?php echo $prodPrec;?>">
                </div>
                <div class="col-12">
                    <label for="ciu">Ciudad</label><br>
                    <input type="text" name="ciu" id="ciu" value="<?php echo $prodCiud;?>">
                </div>
                <div class="col-12">
                    <label for="cal">Calle</label><br>
                    <input type="text" name="cal" id="cal" value="<?php echo $prodCall;?>">
                </div>
                <div class="col-12">
                    <label for="dis">Disponible (si/no)</label><br>
                    <input type="text" name="dis" id="dis" value="<?php echo $prodDispon;?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="idUsu" value="<?php echo $idUsu;?>">
                </div>
                <div class="col-12">
                    <input type="hidden" name="idProd" value="<?php echo $idProd;?>">
                </div>
                <div class="col-12">
                    <label for="patata">Imagen del producto</label><br>
                    <input type="file" name="patata" id="patata" accept="image/png,image/jpg,image/jpeg">
                </div>
                <div class="col-12">
                    <input type="submit" value="Apashurrale">
                </div>
            </form>
        </div>
    </div>
    
    <div class="row bg-dark mt-2 py-4">
        <div class="col-12">
            <h2 class="display-4 text-center">Productos a su alcance</h2>
        </div>
    </div>
</div>
</body>
</html>