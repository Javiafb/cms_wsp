<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controller/controller_conexion.php';
    require_once '../model/model_funciones.php';

    $model = new model_funcion();
    $data = json_decode(file_get_contents('php://input'), true);

    // solicitud JSON
    if ($data) {
        $id = trim($data['id'] ?? '');
        $type = trim($data['type'] ?? '');
    } else {
        echo 'error';
    }

    if (!empty($id) && !empty($type)) {

        if ($type === 'categorias' && $model->eliminar_categoria($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Categoría eliminada correctamente']);
            exit;
        }
        if ($type === 'grupos' && $model->eliminar_grupo($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Grupo eliminado correctamente']);
            exit;
        }
        if ($type === 'usuarios' && $model->eliminar_usuario($id)) {
            echo json_encode(['status' => 'success', 'message' => 'Usuario eliminado correctamente']);
            exit;
        }


        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID o tipo no proporcionado']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
