<?php

// controladores

require_once './controllers/conexion.php';
require_once './controllers/view.php';
require_once './controllers/controller_grupos.php';
require_once './controllers/controller_categorias.php';

// modelos

require_once './models/model_grupo.php';
require_once './models/model_categoria.php';


$vista = new vista();
$vista->index();
