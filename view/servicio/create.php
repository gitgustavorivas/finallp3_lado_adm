<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
   
    require_once(CONTROLLER_PATH.'servicioController.php');
    $object = new servicioController();
    //$ciudades = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Servicio</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo registro</h2>
        </div>
        <form id="formServicio" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre" class="form-label">SERVICIO</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
                <div class="invalid-feedback">ingrese un servicio válido!</div>
            </div>

            <div class="mb-3">
                <label for="importe" class="form-label">IMPORTE</label>
                <input type="number" class="form-control" id="importe" name="importe" required>
                <div class="invalid-feedback">ingrese un importe válido!</div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-2">Agregar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>