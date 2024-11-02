<?php

// controladores

require_once './controllers/conexion.php';
require_once './controllers/view.php';
require_once './controllers/controller_grupos.php';
require_once './controllers/controller_categorias.php';
require_once './controllers/controller_detalles.php';

// modelos

require_once './models/model_grupo.php';
require_once './models/model_categoria.php';
require_once './models/model_detalles.php';

// rutas
require_once './controllers/controller_rutas.php';

$vista = new vista();
$vista->index();


