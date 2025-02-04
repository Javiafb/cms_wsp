<?php require_once 'content/header.php' ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Usuarios</h5>
            <p class="mb-0"> Informacion de los usuarios registrados en la base de datos </p>
            <br>
            <div class="container mt-5">

                <?php

                require './controller/controller_datos.php';
                require './model/model_usuarios.php';

                $tablausu = new dataTables();
                $tablausu->tables_user();

                ?>
            </div>
        </div>
    </div>
</div>

<?php require_once 'content/footer.php' ?>