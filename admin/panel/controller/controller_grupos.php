<?php

class Controller_grupos_a
{
    public function grupos_ver()
    {
        $obtenerinfo = new model_grupo();

        // Verificar si el usuario es administrador
        if ($_SESSION['uid'] == 1) {
            $resultado = $obtenerinfo->grupos_info();
        } else {
            $resultado = $obtenerinfo->grupos_infousu();
        }

        if (!$resultado) {
            echo "Error al obtener los datos de los grupos.";
            return;
        }

        $grupos = [];

        while ($datos = mysqli_fetch_assoc($resultado)) {
            $grupos[] = $datos;
        }

        if (empty($grupos)) {
            echo "No se encontraron grupos.";
            return;
        }

        echo '
             <div class="row"> ';
        foreach ($grupos as $grup) {
            echo '
                <div class="col-sm-6 col-xl-3">
                    <div class="card overflow-hidden rounded-2">
                        <div class="position-relative">
                            <a href="javascript:void(0)"><img src="http://localhost/cms_wsp/public/img/grupo-img/' . $grup['img_grupo'] . '" class="card-img-top rounded-0" alt="..."></a>
                            <a class=" btn-edit bg-primary rounded-circle p-2 text-white d-inline-flex cursor-pointer position-absolute bottom-0 end-0 mb-n3 me-3"   title="Editar"  data-type="editar"  data-gru="' . $grup["grupo_id"] . '" data-nombre="' . $grup["nombre_grupo"] . '  " data-enlace="' . $grup["enlace_grupo"] . ' " data-categoria="' . $grup["nombre_categoria"] . '" data-pclave="' . $grup["pclave_grupo"] . '" data-img="' . $grup["img_grupo"] . '">
                            <i class="ti ti-eye fs-4"></i></a>
                        </div>
                        <div class="card-body pt-3 p-4">
                            <h6 class="fw-semibold fs-4">' . $grup['nombre_grupo'] . '</h6>
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fw-semibold fs-4 mb-0">' . $grup['pclave_grupo'] . '<span class="ms-2 fw-normal text-muted fs-3"></span></h6>
                            </div>
                        </div>
                    </div>
                </div> ';
        }

        echo '
            </div>
            ';
    }
}
