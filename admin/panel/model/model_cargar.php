<?php
class cargar_imformacion
{

    public function guardar_usu() {}

    public function guardar_grupo($datos)
    {
        $conexion = new conectar();
        $cone = $conexion->conexion();

        $query = "INSERT INTO grupos_wsp (id_catego, nombre_grupo, enlace_grupo, descripcion_grupo, pclave_grupo, img_grupo) 
              VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $cone->prepare($query);

        if (!$stmt) {
            return "Error al preparar la consulta: " . $cone->error;
        }

        // Vincular los parámetros
        $stmt->bind_param(
            "ssssss",
            $datos['categorias'],
            $datos['nombre'],
            $datos['enlace'],
            $datos['descripcion'],
            $datos['palabraclave'],
            $datos['imagen']
        );

        if ($stmt->execute()) {
            $resultado = true;
        } else {
            $resultado = "Error al ejecutar la consulta: " . $stmt->error;
        }

        $stmt->close();
        $cone->close();

        return $resultado;
    }

    public function guadar_categoria($nombre)
    {

        $conexion = new conectar();
        $cone = $conexion->conexion();

        $query = ("INSERT INTO categorias_wsp(nombre_categoria) VALUES ('$nombre')");

        $stmt = $cone->prepare($query);

        if ($stmt->execute()) {
            $resultado = true;
        } else {
            $resultado = "Error al ejecutar la consulta: " . $stmt->error;
        }

        $stmt->close();
        $cone->close();

        return $resultado;
    }
}
