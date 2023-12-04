<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
   
    require_once(CONTROLLER_PATH.'RegistroUsuarioController.php');
    $object = new RegistroUsuarioController();
    $roles = $object->combolist();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>Usuarios</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agregando nuevo Usuario</h2>
        </div>
        <form id="formUsuario" action="store.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="alias" class="form-label">USUARIO</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="text" class="form-control" id="alias" name="alias" required>
                <div class="invalid-feedback">ingrese un Usuario válido!</div>
            </div>

            <div class="mb-3">
                <label for="clave" class="form-label">CONTRASEÑA</label>
                <input type="password" class="form-control" id="clave" name="clave" required>
                <div class="invalid-feedback">ingrese una contraseña aceptable</div>
            </div>

            <div class="mb-3">
                <label for="idRol" class="form-label">ROL</label>
                <select class="form-control" name="idRol" id="idRol" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($roles as $rol) { ?>
                    <option value="<?=$rol['idRol']?>"><?=$rol['nombre']?></option> 
                    <?php } ?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-2">Agregar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>

</html>