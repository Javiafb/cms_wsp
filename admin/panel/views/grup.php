<?php require_once 'content/header.php' ?>
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Mi grupo</h5>
            <p class="mb-0">lista de grupos a los cuales te encuentras registrado </p>
            <br>

            <?php

            require './controller/controller_grupos.php';
            require './model/model_grupos.php';

            $ver_grupos = new controller_grupos_a();
            $ver_grupos->grupos_ver();

            ?>
        </div>
    </div>
</div>

<?php require_once 'content/footer.php' ?>