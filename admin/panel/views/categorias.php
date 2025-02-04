<?php
ob_start();
require_once 'content/header.php'; ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Categorias</h5>
            <p class="mb-0"> Informacion de las categorias registrados en la base de datos </p>
            <br>


            <?php

            require './controller/controller_guardar_dat.php';

            $pruba = new guardarController();
            $pruba->guardarcate();

            ?>


            <!-- modal -->
            <button style="position: absolute; right:80px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                nueva categoria
            </button>
            <!-- modal -->

            <div class="container mt-5">

                <?php

                require './controller/controller_datos.php';
                require './model/model_catego.php';


                $tablausu = new dataTables();

                $tablausu->table_categorias();
                ?>


            </div>
        </div>
    </div>
</div>

<!-- Modal para crear nueva categoría -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear nueva categoria</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="guardac">
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre_cate">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" form="guardac">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php
require_once 'content/footer.php';
ob_end_flush(); 
?>