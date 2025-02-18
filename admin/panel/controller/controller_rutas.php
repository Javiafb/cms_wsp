

<?php

$rut = array();

if (isset($_GET['rut'])) {
    $rut = explode("/", $_GET['rut']);
}

// Si no hay rut, redirigir a index
if (empty($rut[0])) {
    require_once "../panel/views/index.php";
    exit();
}

// Manejar rutas específicas
switch ($rut[0]) {
    case "index":
        require_once "../panel/views/index.php";
        exit();
    case "grupo":
        require_once "../panel/views/grup.php";
        exit();
    case "datos":
        require_once "../panel/views/database.php";
        exit();
    case "cate":
        require_once "../panel/views/categorias.php";
        exit();
    case "user":
        require_once "../panel/views/user_data.php";
        exit();
    case "login":
        require_once "../panel/views/authentication-login.php";
        exit();
    case "register":
        require_once "../panel/views/authentication-register.php";
        exit();
    case "salir":
        require_once "./controller/controller_sesion_close.php";
        exit();
    default:
        require_once "../panel/views/404.php";
        exit();
}
