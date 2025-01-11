

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
    case "ui-buttons":
        require_once "../panel/views/ui-buttons.php";
        exit();
    case "grupo":
        require_once "../panel/views/grup.php";
        exit();
    case "datos":
        require_once "../panel/views/database.php";
        exit();
    case "user":
        require_once "../panel/views/user_data.php";
        exit();
    case "ui-alerts":
        require_once "../panel/views/ui-alerts.php";
        exit();
    case "ui-card":
        require_once "../panel/views/ui-card.php";
        exit();
    case "ui-forms":
        require_once "../panel/views/ui-forms.php";
        exit();
    case "ui-typography":
        require_once "../panel/views/ui-typography.php";
        exit();
    case "login":
        require_once "../panel/views/authentication-login.php";
        exit();
    case "register":
        require_once "../panel/views/authentication-register.php";
        exit();
    case "icon-tabler":
        require_once "../panel/views/icon-tabler.php";
        exit();
    case "sample-page":
        require_once "../panel/views/sample-page.php";
        exit();
    default:
        echo 'Error: Página no encontrada';
        exit();
}
