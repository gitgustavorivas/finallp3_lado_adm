<?php
  include_once ($_SERVER['DOCUMENT_ROOT'].'/proyectolp3/routes.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <?php include_once (ROOT_PATH .'header.php') ?>
</head>
<body>
<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">
        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0"><img src="../../assets/images/logofisio.png" width="80" height="80"></span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form id="formLogin" action="" method="post" autocomplete="off" style="width: 23rem;">

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">INICIO SESION</h3>
<!-- usuario input -->
            <div class="form-outline mb-4">
            <label class="form-label" for="usuario">Usuario</label>
            <input type="usuario" name="usuario" id="usuario" class="form-control form-control-lg"
              placeholder="ingrese usuario" autocorrect="off" spellcheck="false" />
            </div>
<!-- password input -->
            <div class="form-outline mb-3">
            <label class="form-label" for="clave">Contraseña</label>
            <input type="password" name="clave" id="clave" class="form-control form-control-lg" placeholder="digite contraseña" autocorrect="off" spellcheck="false" />
            </div>

            <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">ENTRAR</button>
          </div>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="../../assets/images/descanso listo.png"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
      </div>
    </div>
  </div>
  <div class="text-white mb-3 mb-md-0">
      Copyright © 2023. All rights reserved.
    </div>
</section>

</body>
    <?php include_once (ROOT_PATH . 'footer.php') ?>
</html>