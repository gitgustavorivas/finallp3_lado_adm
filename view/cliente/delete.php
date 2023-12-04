<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

    require_once(CONTROLLER_PATH.'clienteController.php');
    $object = new clienteController();

    $idCliente = $_REQUEST['id'];  
    $object->delete($idCliente);
    
?>