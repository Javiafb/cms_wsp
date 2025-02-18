<?php
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once '../model/model_editar.php';

    $model = new model_edit();
    $data = json_decode(file_get_contents('php://input'), true);

    // Si la solicitud es JSON
    if ($data) {
        $id = trim($data['id_gru'] ?? '');
        $type = trim($data['type'] ?? '');
    } else {
        // Si la solicitud es FormData (usando POST y FILES)
        $id = trim($_POST['id_gru'] ?? '');
        $type = trim($_POST['type'] ?? '');
    }

    if (!empty($id) && !empty($type)) {

        if ($type === 'editar') {
            $nombre = trim($_POST['nombre'] ?? '');
            $enlace = trim($_POST['enlace'] ?? '');
            // $categoria = trim($_POST['categoria'] ?? '');
            $pclave = trim($_POST['pclave'] ?? '');


            if ($model->editar_grupo($id, $nombre, $enlace,  $pclave)) {
                echo json_encode(['status' => 'success', 'message' => 'Grupo actualizado correctamente']);
                exit;
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Error al actualizar el grupo']);
                exit;
            }
        }

        echo json_encode(['status' => 'error', 'message' => 'Error al eliminar o editar']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'ID o tipo no proporcionado']);
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Método no permitido']);
}
