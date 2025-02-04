<?php require_once './controller/controller_rol.php'; ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Iniciar sesion</title>
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

<body>


  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="../panel/src/assets/images/logos/logot.png" width="120" alt="">
                </a>
                <p class="text-center">CMS/WSP</p>
                <form  method="post" id="login">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Usuario</label>
                    <input type="email" placeholder="correoelectronico" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" placeholder="........" name="contra" class="form-control" id="exampleInputPassword1">
                  </div>
                  <div class="d-flex align-items-center justify-content-between mb-4">
                    <div class="form-check">
                      <input class="form-check-input primary" type="checkbox" value="" id="flexCheckChecked" checked="">
                      <label class="form-check-label text-dark" for="flexCheckChecked">
                        aceptar condiciones
                      </label>
                    </div>
                    <a class="text-primary fw-bold" href="#">recuperar contraseña?</a>
                  </div>
                  <button type="submit" class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Iniciar sesion</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <a class="text-primary fw-bold ms-2" href="register">Crear cuenta</a>
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