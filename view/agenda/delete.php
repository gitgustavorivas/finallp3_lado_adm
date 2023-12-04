<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

    require_once(CONTROLLER_PATH.'agendaController.php');
    $object = new agendaController();

    $idAgenda = $_REQUEST['id'];  
    $object->delete($idAgenda);
    
?>