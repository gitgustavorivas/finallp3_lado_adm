<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

    require_once(CONTROLLER_PATH.'servicioController.php');
    $object = new servicioController();

    $nombre = $_REQUEST['nombre'];
    $importe = $_REQUEST['importe'];
    
    $registro = $object->insert($nombre,$importe);   
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>