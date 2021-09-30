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

    <div class="row justify-content-center align-items-center">
        <div class="col-4 bg-info mb-2 mt-3 py-2 formulario">
            <form action='../controller/ActualizaProducto.php' method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nom">Nombre del producto</label>
                    <input type="text" class="form-control" name="nom" id="nom" value="<?php echo $prodNombre;?>">
                </div>
                <div class="form-group">
                    <label for="des">Descripcion del producto</label>
                    <input type="text" class="form-control" name="des" id="des" value="<?php echo $prodDesc;?>">
                </div>
                <div class="form-group">
                    <label for="pre">Precio</label>
                    <input type="number" class="form-control" name="pre" id="pre" value="<?php echo $prodPrec;?>">
                </div>
                <div class="form-group">
                    <label for="ciu">Ciudad</label>
                    <input type="text" class="form-control" name="ciu" id="ciu" value="<?php echo $prodCiud;?>">
                </div>
                <div class="form-group">
                    <label for="cal">Calle</label>
                    <input type="text" class="form-control" name="cal" id="cal" value="<?php echo $prodCall;?>">
                </div>
                <div class="form-group">
                    <label for="dis">Disponible (si/no)</label>
                    <input type="text" class="form-control" name="dis" id="dis" value="<?php echo $prodDispon;?>">
                    <input type="hidden" name="idUsu" value="<?php echo $idUsu;?>">
                    <input type="hidden" name="idProd" value="<?php echo $idProd;?>">
                </div>
                <hr>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="patata" id="patata" accept="image/png,image/jpg,image/jpeg">
                    <label class="custom-file-label" for="patata">Imagen del producto</label>
                </div>
                <input class="botonazo alinea" type="submit" value="Actualizar">
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