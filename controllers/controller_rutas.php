

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
        require_once "views/index.php"; // Asegúrate de que este sea el archivo correcto
        break;
    case "categorias":
        require_once "views/categorias.php";
        break;
    case "grupos":
        require_once "views/grupos.php";
        break;
    default:
        echo 'Error: Página no encontrada';
        break;
}

?>

