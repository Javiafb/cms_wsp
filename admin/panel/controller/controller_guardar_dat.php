<?php
ob_start(); // Iniciar el almacenamiento en búfer de salida
require_once './model/model_cargar.php';

class guardarController
{
    public function guardardatos()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? '';
            $palabraclave = $_POST['palabraclave'] ?? '';
            $enlace = $_POST['enlace'] ?? '';
            $categoria = $_POST['categorias'] ?? '';
            $descripcion = $_POST['descripcion'] ?? '';
            $img = $_FILES['imagen'] ?? null;

            if ($img && $img['error'] === UPLOAD_ERR_OK) {
                $name = $img['name'];
                $tmpname = $img['tmp_name'];
                $fecha = date("YmdHis");
                $foto = $fecha . ".jpg";
                $destino = "../../public/img/grupo-img/" . $foto;

                // Intentar mover la imagen al directorio
                if (move_uploaded_file($tmpname, $destino)) {
                    $datos = [
                        'categorias' => $categoria,
                        'nombre' => $nombre,
                        'enlace' => $enlace,
                        'descripcion' => $descripcion,
                        'palabraclave' => $palabraclave,
                        'imagen' => $foto,
                    ];

                    $cargar = new cargar_imformacion();
                    $resultado = $cargar->guardar_grupo($datos);

                    if ($resultado === true) {
                        header("Location:datos");
                        exit();
                    } else {
                        echo "Error al guardar en la base de datos: " . $resultado;
                    }
                } else {
                    echo "Error al mover el archivo al directorio.";
                }
            } else {
                echo "Error al cargar la imagen. Por favor, inténtelo de nuevo.";
            }
        }
    }

    public function guardarcate()
    {
        if (isset($_POST['nombre_cate'])) {

            $categoria = $_POST['nombre_cate'];

            $dato = new cargar_imformacion();
            $respuesta = $dato->guadar_categoria($categoria);

            if ($respuesta === true) {
                header("Location:cate");
                exit();
            } else {
                echo "Error al guardar en la base de datos: " . $respuesta;
            }
        }
    }
}
ob_end_flush(); // Enviar el contenido del búfer de salida y desactivar el almacenamiento en búfer
