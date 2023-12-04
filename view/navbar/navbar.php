<?php
    include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
   // session_start();
    $usuario = null;
    if (isset($_SESSION["usuario"])) {
        $usuario = $_SESSION["usuario"];
    }
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder" href="#">---</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active fw-bolder" aria-current="page" href="<?=PROJECT_PATH?>">[PRINCIPAL]</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CLIENTES</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/cliente/create.php">Agregar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/cliente/">Listar</a></li>
            
           
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            SERVICIOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/servicio/create.php">Agregar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/servicio/">Listar</a></li>
            
           
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            CITAS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/agenda/create.php">Agendar</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/agenda/">Ver</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            USUARIOS
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/registroUsuario/create.php">REGISTRAR</a></li>
           
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Facturas
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=PROJECT_PATH?>view/factura/create.php">Agregar</a></li>
         
          </ul>
        </li>        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle bg-light fw-bolder" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cerrar Sesion 
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item fw-bolder" href="<?=PROJECT_PATH?>view/usuario/logout.php">Salir</a></li>
          </ul>
        </li>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
        <ul><hr class="dropdown-divider"></ul>
        <a class="navbar-brand fw-bolder" href="#">------- </a>
      </ul>
    </div>
  </div>
</nav>