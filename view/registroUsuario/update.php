<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
    
    require_once(CONTROLLER_PATH.'RegistroUsuarioController.php');
    $object = new RegistroUsuarioController();

    $idUsuario = $_REQUEST['id'];
    $alias = $_REQUEST['alias'];
    $clave = $_REQUEST['clave'];
    $idRol = $_REQUEST['idRol'];
    
    $object->update($idUsuario,$alias,$clave,$idRol);
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>