<?php
    session_start();
    $nombreUsu = $_SESSION['userName'];
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
            <form action='../controller/IngresaProducto.php?idUsu=<?php echo $nombreUsu['usuId'];?>' method="post" enctype="multipart/form-data" >
                <input type="text" name="nom" placeholder="Nombre del producto">
                <input type="text" name="des" placeholder="Descripcion del producto">
                <input type="number" name="pre" placeholder="Precio del producto">
                <select name="cat" id="cat">
                    <option value="Ves">Vestimenta</option>
                    <option value="Tec">Tecnologia</option>
                    <option value="Hog">Hogar</option>
                    <option value="Coc">Cocina</option>
                    <option value="Dep">Deportes</option>
                </select>
                <input type="text" name="ciu" placeholder="Ciudad">
                <input type="text" name="cal" placeholder="Calle">
                <input type="file" name="imagen" id="imagen" accept="image/png,image/jpg,image/jpeg">
                <input type="submit" value="Apashurrale">
            </form>
        </div>
    </div>
    <!--Fin del formulario culero-->
</div>
</body>
</html>