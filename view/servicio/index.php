<?php
     include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
     require_once(CONTROLLER_PATH.'servicioController.php');
     $object = new servicioController();
     $rows = $object->select();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <title>Servicios</title>
</head>
<body>
<?php
        require_once(VIEW_PATH.'navbar/navbar.php');
?>
<section class="intro">
    <div class="container">
        <div class="mb-3"></div>
        <div class="mb-3">
            <a href="create.php" class="btn btn-success">Agregar</a>
            <a href="pdf/servicio.php" target="_blank" class="btn btn-warning">Imprimir</a>
        </div>
        <div class="table-responsive table-scroll" 
        data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
        <table id="myTabla" class="table table-striped mb-0">
            <thead style="background-color: #c0c0c0;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">SERVICIO</th>
                    <th scope="col">IMPORTE</th>
                    <th scope="col">OPERACIONES</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ((array) $rows as $row) { ?>
                <tr>
                    <td><?=$row['idServicio']?></td>
                    <td><?=$row['nombre']?></td>
                    <td><?=$row['importe']?></td>
                    <td>
                        <a class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#idver<?=$row['idServicio']?>">Ver</a>
                        <a href="edit.php?id=<?=$row['idServicio']?>" class="btn btn-primary">modificar</a>
                        <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#iddel<?=$row['idServicio']?>">borrar</a>

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
                    <h2 style="font-size: 3.00rem;">SERVICIOS</h2>
                </div>
                <div class="table-responsive table-scroll" 
                data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
                <table class="table table-striped mb-0" style="font-size: 2.00rem;">
                    <thead>
                        <tr>
                            
                                                      
                            <th colspan="3" scope="col">SERVICIO</th>
                            <th colspan="3" scope="col">importe</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            
                                                         
                            <td colspan="4"><?=$row['nombre']?></td>
                            <td colspan="4"><?=$row['importe']?></td>
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