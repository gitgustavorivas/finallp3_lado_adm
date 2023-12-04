<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

    require_once(CONTROLLER_PATH.'agendaController.php');
    $object = new agendaController();

    $fecha = $_REQUEST['fecha'];
    $hora = $_REQUEST['hora'];
    $idCliente = $_REQUEST['idCliente'];
    $telefono = $_REQUEST['telefono'];
    $idServicio = $_REQUEST['idServicio'];
 
    
    
    $registro = $object->insert($fecha,$hora,$idCliente,$telefono,$idServicio);   
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>