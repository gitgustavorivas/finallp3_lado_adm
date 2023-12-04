<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    
    require_once(CONTROLLER_PATH.'servicioController.php');
    $object = new servicioController();
    $idServicio = $_REQUEST['id'];
    $nombre = $_REQUEST['nombre'];
    $precio = $_REQUEST['precio'];
    
    $object->update($idServicio,$nombre,$precio);
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>