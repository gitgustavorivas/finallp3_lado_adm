<?php
     include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
     require_once(CONTROLLER_PATH.'agendaController.php');
     $object = new agendaController();
     $rows = $object->select();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <title>AGENDA</title>
</head>
<body>
<?php
        require_once(VIEW_PATH.'navbar/navbar.php');
?>
<section class="intro">
    <div class="container">
        <div class="mb-3"></div>
        <div class="mb-3">
            <a href="create.php" class="btn btn-success">Nuevo</a>
            <!-- <a href="javascript:imprimirWindow('ventana')" class="btn btn-info">Imprimir</a> -->
            <a href="pdf/agenda.php" target="_blank" class="btn btn-warning">Imprimir</a>
            
        </div>
        <div class="table-responsive table-scroll" 
        data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
        <table id="myTabla" class="table table-striped mb-0">
            <thead style="background-color: #c0c0c0;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">FECHA</th>
                    <th scope="col">HORA</th>
                    <th scope="col">CLIENTE</th>
                    <th scope="col">TELEFONO</th>
                    <th scope="col">SERVICIO</th>
                    <th scope="col">OPERACIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ((array) $rows as $row) { ?>
                <tr>
                    <td><?=$row['idAgenda']?></td>
                    <td><?=$row['fecha']?></td>
                    <td><?=$row['hora']?></td>
                    <td><?=$row['cliente']?></td>
                    <td><?=$row['telefono']?></td>
                    <td><?=$row['servicio']?></td>
                    <td>
                        <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#idver<?=$row['idAgenda']?>">Ver</a>
                        <a href="edit.php?id=<?=$row['idAgenda']?>" class="btn btn-primary">modificar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?=$row['idAgenda']?>">Borrar</a>

                        <!-- modal para ver y del -->
                        <?php 
                            include ('viewModal.php');
                            include ('deleteModal.php');
                        ?>

                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>  
    </div>  
</section>
        <!-- div area de impresion -->
            <div class="container" id="ventana" style="display:none;">
                <div class="mb-3">
                    <h2 style="font-size: 3.00rem;">Listado de Clientes</h2>
                </div>
                <div class="table-responsive table-scroll" 
                data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
                <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                    <thead>
                        <tr>
                            <th colspan="1" scope="col">ID</th>
                            <th colspan="2" scope="col">FECHA</th>
                            <th colspan="1" scope="col">HORA</th>
                            <th colspan="3" scope="col">NOMBRE</th>
                            <th colspan="3" scope="col">SERVICIO</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td colspan="1"><?=$row['idAgenda']?></td>
                            <td colspan="2"><?=$row['fecha']?></td>
                            <td colspan="1"><?=$row['hora']?></td>
                            <td colspan="3"><?=$row['nombre']?></td>
                            <td colspan="3"><?=$row['servicio']?></td>     
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>  
        </div>   
        <!-- fin area de impresion -->
</body>
<?php include_once (ROOT_PATH . 'footer.php')  ?>
<script>
    $(document).ready( function () {
        //$('#myTabla').DataTable();
        var table = new DataTable('#myTabla', {
            language: {
                url: '../../assets/js/es-ES.json',
            },
            'paging': true,
                lengthMenu: [
                    [5, 10, 25, 50, -1],
                    [5, 10, 25, 50, 'Todos']
            ] 
        });
    } );    
</script>
</html>