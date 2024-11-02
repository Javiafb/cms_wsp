<?php 

require_once 'content/header.php';
require_once '../controllers/controller_detalles.php';
require_once '../models/model_detalles.php';
require_once '../controllers/conexion.php';

$id = $_GET['v'];

$iford = new Model_detalles();
$obtenerd = $iford->detall($id);

?>

<?php

$detalles = new controller_detalle();
$detalles->detalles($id);

?>

</div>

<?php require_once 'content/footer.php'; ?>