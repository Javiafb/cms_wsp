<?php require './controller/controller_guardar_dat.php';?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registro</title>
  <link rel="shortcut icon" type="image/png" href="../panel/src/assets/images/logos/logot.png">
  <link rel="stylesheet" href="../panel/src/assets/css/styles.min.css">
  <style type="text/css">
    @font-face {
      font-weight: 400;
      font-style: normal;
      font-family: circular;

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Book.woff2') format('woff2');
    }

    @font-face {
      font-weight: 700;
      font-style: normal;
      font-family: circular;

      src: url('chrome-extension://liecbddmkiiihnedobmlmillhodjkdmb/fonts/CircularXXWeb-Bold.woff2') format('woff2');
    }
  </style>
</head>

<?php

$registrar = new guardarController();
$registrar->registro();


?>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="javascript:void(0)" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../panel/src/assets/images/logos/logot.png" width="110" alt="">
                </a>
                <p class="text-center">CMS/WSP</p>
                <form method="post">
                  <div class="mb-3">
                    <label for="exampleInputtext1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre_usu" id="name" aria-describedby="textHelp" required>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo_usu" id="Email" aria-describedby="emailHelp" required>
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">contraseña</label>
                    <input type="password" class="form-control" name="contra_usu" id="Password" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Registrase</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">YA TINES UNA CUENTA?</p>
                    <a class="text-primary fw-bold ms-2" href="login">Iniciar sesion</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../panel/src/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../panel/src/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


  <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb">
    <section id="shadow-host-companion"></section>
  </div>
</body>

</html>