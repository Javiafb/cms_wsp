

<?php

$url = array();

if (isset($_GET['url'])) {
    $url = explode("/", $_GET['url']);
}

// Si no hay URL, redirigir a index
if (empty($url[0])) {
    require_once "views/index.php";
    exit();
}

// Manejar rutas específicas
switch ($url[0]) {
    case "index":
        require_once "views/index.php";
        exit();
    case "categorias":
        require_once "views/categorias.php";
        exit();
    case "grupos":
        require_once "views/grupos.php";
        exit();
    default:
        echo 'Error: Página no encontrada';
        exit();
}
