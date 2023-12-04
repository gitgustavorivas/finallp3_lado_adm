<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

require_once(CONTROLLER_PATH.'RegistroUsuarioController.php');
$object = new RegistroUsuarioController();

$idUsuario = $_REQUEST['id'];  
$object->delete($idUsuario);

?>