<?php
     include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
     require_once(CONTROLLER_PATH.'RegistroUsuarioController.php');
     $object = new RegistroUsuarioController();
     $rows = $object->select();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once (ROOT_PATH . 'header.php') ?>
    <title>Usuarios</title>
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
            
        </div>
        <div class="table-responsive table-scroll" 
        data-mdb-perfect-scrollbar="true" style="position: relative; height:700px;">
        <table id="myTabla" class="table table-striped mb-0">
            <thead style="background-color: #c0c0c0;">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">USUARIO</th>
                    <th scope="col">CONTRASEÑA</th>
                    <th scope="col">ROL</th>
                   
                </tr>
            </thead>
            <tbody>
            <?php foreach ((array) $rows as $row) { ?>
                <tr>
                    <td><?=$row['idUsuario']?></td>
                    <td><?=$row['alias']?></td>
                    <td><?=$row['clave']?></td>
                    <td><?=$row['idRol']?></td>
                    <td>
                        
                        
                       

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
 </body>
</html>