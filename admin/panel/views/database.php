<?php
ob_start(); 
require_once 'content/header.php';
?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Datos</h5>
            <p class="mb-0"> Informacion de los grupos registrados en la base de datos </p>

            <!-- modal -->
            <button style="position: absolute; right:80px" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                nuevo grupo
            </button>
            <!-- modal -->

            <?php

            require './controller/controller_guardar_dat.php';

            $pruba = new guardarController();
            $pruba->guardardatos();

            ?>
            <br>

            <div class="container mt-5">
                <?php

                require './controller/controller_datos.php';
                require './model/model_grupos.php';

                $tablausu = new dataTables();
                $tablausu->table_grup();

                ?>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear nuevo grupo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="guardag">
                    <div class="mb-3">
                        <label for="nombre" class="col-form-label">Nombre:</label>
                        <input type="text" required class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="mb-3">
                        <label for="palabraclave" class="col-form-label">Palabra clave:</label>
                        <input type="text" required class="form-control" id="palabraclave" name="palabraclave">
                    </div>
                    <div class="mb-3">
                        <label for="enlace" class="col-form-label">Enlace URL:</label>
                        <input type="url" required class="form-control" id="enlace" name="enlace">
                    </div>
                    <div class="mb-3">
                        <label for="categorias" class="col-form-label">Categoría:</label>
                        <select class="form-select" name="categorias" id="categorias" required>
                            <option value="1">anime</option>
                            <option value="2">ciencia</option>
                            <option value="3">hola</option>
                            <option value="4">prueba</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="col-form-label">Imagen:</label>
                        <input type="file" required class="form-control" id="imagen" name="imagen">
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-success" form="guardag">Guardar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php
require_once 'content/footer.php';
ob_end_flush(); // Enviar el contenido del búfer de salida y desactivar el almacenamiento en búfer
?>