<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
    header('location: ../usuario/login.php');
    }

    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    require_once(CONTROLLER_PATH.'clienteController.php');
    $object = new clienteController();
    $ciudades = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Form PHP</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo Cliente</h2>
        </div>
        <form id="formPersona" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                <div class="invalid-feedback">ingrese un nombre válido!</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
                <div class="invalid-feedback">ingrese un apellido válido!</div>
            </div>

            <div>
                <label for="edad" class="form-label">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" required>
                <div class="invalid-feedback">ingrese edad válido!</div>
            </div> 
             <br>
            <div class="col">
                <label for="idCiudad" class="form-label">Ciudad</label>
                <select class="form-control" name="idCiudad" id="idCiudad" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($ciudades as $ciudad) { ?>
                    <option value="<?=$ciudad['idCiudad']?>"><?=$ciudad['nombre']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <br>

            <div>
                <label for="ci" class="form-label">C.I.N°</label>
                <input type="text" class="form-control" id="ci" name="ci" required>
                <div class="invalid-feedback">ingrese CI válido!</div>
            </div> 
            <br>
            <button type="submit" class="btn btn-primary btn-lg col-4">Guardar</button>
            
        </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>