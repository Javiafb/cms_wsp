<?php
class model_funcion
{

    public function eliminar_categoria($id)
    {

        $conectar = new conectar();
        $cone = $conectar->conexion();

        $stmt = $cone->prepare("DELETE FROM categorias_wsp WHERE id_cate = ?");
        if ($stmt === false) {
            error_log("Error en prepare: " . $cone->error);
            return false;
        }

        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();

        if ($resultado === false) {
            error_log("Error en execute: " . $stmt->error);
        }

        $stmt->close();
        $cone->close();
        return $resultado;
    }

    public function eliminar_grupo($id)
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $stmt = $cone->prepare("DELETE FROM grupos_wsp WHERE grupo_id = ?");
        if ($stmt === false) {
            error_log("Error en prepare: " . $cone->error);
            return false;
        }

        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();

        if ($resultado === false) {
            error_log("Error en execute: " . $stmt->error);
        }

        $stmt->close();
        $cone->close();
        return $resultado;
    }

    public function eliminar_usuario($id)
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $stmt = $cone->prepare("DELETE FROM usuarios_wsp WHERE id_usu = ?");
        if ($stmt === false) {
            error_log("Error en prepare: " . $cone->error);
            return false;
        }

        $stmt->bind_param("i", $id);
        $resultado = $stmt->execute();

        if ($resultado === false) {
            error_log("Error en execute: " . $stmt->error);
        }

        $stmt->close();
        $cone->close();
        return $resultado;
    }
}
