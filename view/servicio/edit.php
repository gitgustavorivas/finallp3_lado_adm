<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    require_once(CONTROLLER_PATH.'servicioController.php');
    $object = new servicioController();
    $idServicio = $_GET['id'];
    $servicio = $object->search($idServicio);
    //$ciudades = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once(VIEW_PATH.'/navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editar Servicios</h2>
        </div>
        <form id="formServicios" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID SERV.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$servicio[0]?>" type="text" class="form-control" id="id" name="id" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$servicio[1]?>" type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                 <div class="invalid-feedback">ingrese Dato válido!</div>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input value="<?=$servicio[2]?>" type="text" class="form-control" id="precio" name="precio" required>
                 <div class="invalid-feedback">ingrese un precio válido!</div>          
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>