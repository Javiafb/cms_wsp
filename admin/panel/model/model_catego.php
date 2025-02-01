<?php

class model_categorias
{
    public function obte_categorias()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();
        $consulta = mysqli_query($cone, "SELECT * FROM categorias_wsp");
        mysqli_close($cone);
        return $consulta;
    }

    public function eliminar_categoria($id)
    {

        require_once '../controller/controller_categorias.php';

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
}
