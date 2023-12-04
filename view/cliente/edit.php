<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    require_once(CONTROLLER_PATH.'clienteController.php');
    $object = new clienteController();
    $idCliente = $_GET['id'];
    $cliente = $object->search($idCliente);
    $ciudades = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
</head>
<body>
    <?php
        require_once(VIEW_PATH.'/navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Editar Datos Cliente</h2>
        </div>
        <form id="formPersona" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID Est.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$cliente[0]?>" type="text" class="form-control" id="id" name="id" readonly>
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$cliente[1]?>" type="text" class="form-control" id="nombre" name="nombre" autofocus required>
                 <div class="invalid-feedback">ingrese un nombre válido!</div>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input value="<?=$cliente[2]?>" type="text" class="form-control" id="apellido" name="apellido" required>
                 <div class="invalid-feedback">ingrese un apellido válido!</div>          
            </div>
            <div class="mb-3">
                <label for="edad" class="form-label">edad</label>
                <input value="<?=$cliente[3]?>" type="text" class="form-control" id="edad" name="edad" required>
                 <div class="invalid-feedback">ingrese datos válido!</div>          
            </div>
            <div class="mb-3">
                <label for="idCiudad" class="form-label">Código ciudad</label>
                <select class="form-control" name="idCiudad" id="idCiudad" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($ciudades as $ciudad) { 
                        if ($cliente[4]==$ciudad['idCiudad']) { ?>
                            <option selected="selected" value="<?=$ciudad['idCiudad']?>"><?=$ciudad['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$ciudad['idCiudad']?>"><?=$ciudad['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <div class="mb-3">
                <label for="ci" class="form-label">C.I.N°</label>
                <input value="<?=$cliente[5]?>" type="text" class="form-control" id="ci" name="ci" required>
                 <div class="invalid-feedback">ingrese un numero válido!</div>          
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>