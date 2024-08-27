<?php
require_once './controllers/conexion.php';
require_once './controllers/view.php';
require_once './controllers/controller_grupos.php';

$vista = new vista();
$vista->index();
