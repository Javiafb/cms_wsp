<?php

// class model_edit
// {


//     public function editar_grupo($id_grupo, $nombre, $enlace,  $pclave)
//     {

//         require_once '../controller/controller_conexion.php';


//         $conectar = new conectar();
//         $cone = $conectar->conexion();
//         $stmt = $cone->prepare("UPDATE grupos_wsp SET nombre_grupo = $nombre, enlace_grupo = $enlace,  pclave_grupo = $pclave WHERE grupo_id = $id_grupo");

//         if ($stmt === false) {
//             error_log("Error en prepare: " . $cone->error);
//             return false;
//         }

//         $stmt->bind_param("isss", $id_gru,$nombre, $enlace, $pclave);
//         $resultado = $stmt->execute();

//         if ($resultado === false) {
//             error_log("Error en execute: " . $stmt->error);
//         }

//         $stmt->close();
//         $cone->close();

//     }
// }


class model_edit
{
    public function editar_grupo($id_grupo, $nombre, $enlace, $pclave)
    {
        require_once '../controller/controller_conexion.php';

        $conectar = new conectar();
        $cone = $conectar->conexion();

        // Usamos placeholders "?" para evitar errores de sintaxis y SQL Injection
        $stmt = $cone->prepare("UPDATE grupos_wsp SET nombre_grupo = ?, enlace_grupo = ?, pclave_grupo = ? WHERE grupo_id = ?");

        if ($stmt === false) {
            error_log("Error en prepare: " . $cone->error);
            return false;
        }

        // Vinculamos los parámetros correctamente (orden correcto y tipos correctos)
        $stmt->bind_param("sssi", $nombre, $enlace, $pclave, $id_grupo);

        $resultado = $stmt->execute();

        if ($resultado === false) {
            error_log("Error en execute: " . $stmt->error);
        }

        // Cerrar la consulta y la conexión
        $stmt->close();
        $cone->close();

        return $resultado; // Retorna true si se actualizó correctamente
    }
}
