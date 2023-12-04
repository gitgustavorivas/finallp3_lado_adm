<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');

    require_once(CONTROLLER_PATH.'RegistroUsuarioController.php');
    $object = new RegistroUsuarioController();

    $alias = $_REQUEST['alias'];
    $clave = md5($_REQUEST['clave']);
    $idRol = $_REQUEST['idRol'];
    
    $registro = $object->insert($alias,$clave,$idRol);   
?>
<script>
    history.replaceState(null,null,location.pathname);
</script>