<?php

// controladores
require_once './controller/controller_conexion.php';
require_once './controller/controller_rutas.php';
require_once './controller/controller.php';

// vista
$panelA = new vistas();
$panelA->index();
