<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    require_once(CONTROLLER_PATH.'agendaController.php');
    $object = new agendaController();
    $idAgenda = $_GET['id'];
    $agenda = $object->search($idAgenda);
    $clientes = $object->combolistCliente();
    $servicios = $object->combolistServicio();
    
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
            <h2>Editar Datos de Agenda</h2>
        </div>
        <form id="formPersona" action="update.php" method="post" class="g-3 needs-validation" novalidate>
            <div class="mb-3">
                <label for="id" class="form-label">ID Est.</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$agenda[0]?>" type="text" class="form-control" id="id" name="id" readonly>
            </div>
            <div class="mb-3">
                <label for="fecha" class="form-label">FECHA</label>
                <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                <input value="<?=$agenda[1]?>" type="date" class="form-control" id="fecha" name="fecha" autofocus required>
                 <div class="invalid-feedback">ingrese un fecha válido!</div>
            </div>
            <div class="mb-3">
                <label for="hora" class="form-label">HORA</label>
                <input value="<?=$agenda[2]?>" type="time" class="form-control" id="hora" name="hora" required>
                 <div class="invalid-feedback">ingrese un hora válido!</div>          
            </div>

            <div class="mb-3">
                <label for="idCliente" class="form-label">CLIENTE</label>
                <select class="form-control" name="idCliente" id="idCliente" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($clientes as $cliente) { 
                        if ($agenda[3]==$cliente['idCliente']) { ?>
                            <option selected="selected" value="<?=$cliente['idCliente']?>"><?=$cliente['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$cliente['idCliente']?>"><?=$cliente['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">TELEFONO</label>
                <input value="<?=$agenda[4]?>" type="text" class="form-control" id="telefono" name="telefono" required>
                 <div class="invalid-feedback">ingrese datos válido!</div>          
            </div>

            <div class="mb-3">
                <label for="idServicio" class="form-label">SERVICIO</label>
                <select class="form-control" name="idServicio" id="idServicio" required>
                    <option selected disabled value="">No especificado</option>
                    <?php foreach ($servicios as $servicio) { 
                        if ($agenda[5]==$servicio['idServicio']) { ?>
                            <option selected="selected" value="<?=$servicio['idServicio']?>"><?=$servicio['nombre']?></option> 
                        <?php } else { ?>
                            <option value="<?=$servicio['idServicio']?>"><?=$servicio['nombre']?></option> 
                    <?php } 
                        }?>
                </select>
                <div class="invalid-feedback">seleccione un elemento válido!</div>
            </div>

           

            <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
    </div>
</body>
<script src="../../assets/js/bootstrap.bundle.min.js"></script>
<script src="../../assets/js/jquery.min.js"></script>
<script src="../../assets/js/validate.js"></script>
</html>