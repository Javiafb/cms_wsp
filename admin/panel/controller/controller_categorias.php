<?php

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    require_once '../controller/controller_conexion.php';
    require_once '../model/model_catego.php';

    $data = json_decode(file_get_contents('php://input'), true);

    if (isset($data['id'])) {
        $id = $data['id'];

        $model = new model_categorias();

        if ($model->eliminar_categoria($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Categoría eliminada correctamente']);
        } else {
            error_log("Error al eliminar la categoría con ID: " . $id);
            echo json_encode(['status' => 'error', 'message' => 'Error al eliminar la categoría']);
        }
    } else {
        error_log("ID no proporcionada en la solicitud");
        echo json_encode(['status' => 'error', 'message' => 'ID no proporcionada']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
