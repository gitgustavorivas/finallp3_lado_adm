<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

require_once(CONTROLLER_PATH.'servicioController.php');
$object = new servicioController();

$idServicio = $_REQUEST['id'];  
$object->delete($idServicio);

?>