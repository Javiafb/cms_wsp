<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../controller/controller_conexion.php';
    require_once '../model/model_funciones.php';

    $data = json_decode(file_get_contents('php://input'), true);


    if (isset($data['id']) && isset($data['type'])) {
        $id = trim($data['id']);
        $type = trim($data['type']);

        $model = new model_funcion();

        if ($type === 'categorias') {
            if ($model->eliminar_categoria($id)) {
                echo json_encode(['status' => 'success', 'message' => 'Categoría eliminada correctamente']);
                exit;
            }
        } elseif ($type === 'grupos') {
            if ($model->eliminar_grupo($id)) {
                echo json_encode(['status' => 'success', 'message' => 'Grupo eliminado correctamente']);
                exit;
            }
        } elseif ($type === 'usuarios') {
            if ($model->eliminar_usuario($id)) {
                echo json_encode(['status' => 'success', 'message' => 'Usuario eliminado correctamente']);
                exit;
            }
        }

        error_log("Error al eliminar el elemento con ID: " . $id . " y tipo: " . $type);
        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar el elemento']);
    } else {
        error_log("ID o tipo no proporcionado en la solicitud");
        echo json_encode(['status' => 'error', 'message' => 'ID o tipo no proporcionado']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
