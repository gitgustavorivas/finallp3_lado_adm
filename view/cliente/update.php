<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    
    require_once(CONTROLLER_PATH.'clienteController.php');
    $object = new clienteController();

    $idCliente = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $apellido = $_REQUEST['apellido'];
    $edad = $_REQUEST['edad'];
    $idCiudad = $_REQUEST['idCiudad'];
    $ci = $_REQUEST['ci'];
    
    $object->update($idCliente,$nombre,$apellido,$edad,$idCiudad,$ci);
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>