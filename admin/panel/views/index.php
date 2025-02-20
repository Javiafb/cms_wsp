<?php

require_once 'content/header.php';
require_once './model/model_usuarios.php';
require_once './model/model_grupos.php';

$usuarios_model = new usuarios_tabla();
$total_usuarios = $usuarios_model->contar_usuarios();

$grupos_model = new model_grupo();
$total_grupos = $grupos_model->contar_grupos();
$top_usuarios_grupos = $grupos_model->top_usuarios_grupos();

?>

<script>
  var totalUsuarios = <?php echo $total_usuarios; ?>;
  var totalGrupos = <?php echo $total_grupos; ?>;
  var topUsuariosGrupos = <?php echo json_encode($top_usuarios_grupos); ?>;
</script>

<div class="container-fluid">
  <!--  Row 1 -->
  <div class="row">
    <div class="col-lg-8 d-flex align-items-strech">
      <div class="card w-100">
        <div class="card-body">
          <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
            <div class="mb-3 mb-sm-0">
              <h5 class="card-title fw-semibold">Actividad grupos</h5>
            </div>
            <div>
              <select class="form-select">
                <option value="1">Marzo 2023</option>
                <option value="2">Abril 2023</option>
                <option value="3">Mayo 2023</option>
                <option value="4">Junio 2023</option>
              </select>
            </div>
          </div>
          <div id="chart"></div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="row">
        <div class="col-lg-12">
          <!-- Yearly Breakup -->
          <div class="card overflow-hidden">
            <div class="card-body p-4">
              <h5 class="card-title mb-9 fw-semibold">Cantidad de grupos</h5>
              <div class="row align-items-center">
                <div class="col-8">
                  <h4 class="fw-semibold mb-3"><?php echo $total_grupos; ?></h4>
                  <div class="d-flex align-items-center mb-3">
                    <span
                      class="me-1 rounded-circle bg-light-success round-20 d-flex align-items-center justify-content-center">
                      <i class="ti ti-arrow-up-left text-success"></i>
                    </span>
                    <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                    <p class="fs-3 mb-0">ultimo año</p>
                  </div>
                  <div class="d-flex align-items-center">
                    <div class="me-4">
                      <span class="round-8 bg-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">2024</span>
                    </div>
                    <div>
                      <span class="round-8 bg-light-primary rounded-circle me-2 d-inline-block"></span>
                      <span class="fs-2">2024</span>
                    </div>
                  </div>
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-center">
                    <div id="breakup"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <!-- Monthly Earnings -->
          <div class="card">
            <div class="card-body">
              <div class="row align-items-start">
                <div class="col-8">
                  <h5 class="card-title mb-9 fw-semibold">Cantidad de usuarios</h5>
                  <h4 class="fw-semibold mb-3"><?php echo $total_usuarios; ?> usuarios</h4>
                  
                </div>
                <div class="col-4">
                  <div class="d-flex justify-content-end">
                    <div
                      class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                      <i class="ti ti-users fs-6"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="earning"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php

  require_once 'content/footer.php';

  ?>