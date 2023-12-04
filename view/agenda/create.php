<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
    header('location: ../usuario/login.php');
    }

    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    require_once(CONTROLLER_PATH.'agendaController.php');
    $object = new agendaController();
    $clientes = $object->combolistCliente();
    $servicios = $object->combolistServicio();
   
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <title>CITAS</title>
</head>
<body>
    <?php
        require_once(VIEW_PATH.'navbar/navbar.php');
    ?>
    <div class="container">
        <div class="mb-3">
            <h2>Agendando Cita</h2>
        </div>
        <form id="formAgenda" action="store.php" method="post" class="g-3 needs-validation" novalidate>
        <div class="mb-3">
                <label for="fecha" class="form-label fw-bolder">FECHA</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                <div class="invalid-feedback">ingrese o seleccione fecha válida!</div>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label fw-bolder" >HORA</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="time" class="form-control" id="hora" name="hora" autofocus required>
                <div class="invalid-feedback">ingrese o seleccione hora válida!</div>
            </div>

                <div class="col">
                    <label for="idCliente" class="form-label fw-bolder">NOMBRE</label>
                    <select class="form-control" name="idCliente" id="idCliente" required>
                        <option selected disabled value="">No especificado</option>
                        <?php foreach ($clientes as $cliente) { ?>
                        <option value="<?=$cliente['idCliente']?>"><?=$cliente['nombre']?></option> 
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">seleccione un elemento válido!</div>
                </div>
                 <br>
                <div class="mb-3">
                <label for="telefono" class="form-label fw-bolder">TELEFONO (Dijite su numero sin dejar espacio entre ellos)</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input type="text" class="form-control" id="telefono" name="telefono" autofocus required>
                 <div class="invalid-feedback">ingrese numero telefono válido!</div>
            </div>

                <div class="col">
                    <label for="idServicio" class="form-label fw-bolder">SERVICIO</label>
                    <select class="form-control" name="idServicio" id="idServicio" required>
                        <option selected disabled value="">No especificado</option>
                        <?php foreach ($servicios as $servicio) { ?>
                        <option value="<?=$servicio['idServicio']?>"><?=$servicio['nombre']?></option> 
                        <?php } ?>
                    </select>
                    <div class="invalid-feedback">seleccione un elemento válido!</div>
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