<?php
class cargar_imformacion
{
    public function guardar_usu($registro)
    {
        $conexion = new conectar();
        $cone = $conexion->conexion();
    
        try {
            $password_hashed = password_hash($registro['clave'], PASSWORD_DEFAULT);
    
            $query = "INSERT INTO usuarios_wsp(rol_usu, nombre, correo, clave) VALUES ('2', ?, ?, ?)";
            $eject = $cone->prepare($query);
    
            if (!$eject) {
                throw new Exception("Error en la preparación de la consulta: " . $cone->error);
            }
    
            // Vincular parámetros
            $eject->bind_param(
                "sss",
                $registro['nombre'],
                $registro['correo'],
                $password_hashed 
            );
    
            // Ejecutar la consulta
            if (!$eject->execute()) {
                throw new Exception("Error en la ejecución: " . $eject->error);
            }
    
            $resul = true;
    
        } catch (Exception $e) {
            error_log($e->getMessage()); 
            $resul = false;
        }
    
        $eject->close();
        $cone->close();
    
        return $resul;
    }
    

    public function guardar_grupo($datos)
    {
        $conexion = new conectar();
        $cone = $conexion->conexion();

        $query = "INSERT INTO grupos_wsp (id_usu,id_catego, nombre_grupo, enlace_grupo, descripcion_grupo, pclave_grupo, img_grupo) 
              VALUES ( ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $cone->prepare($query);

        if (!$stmt) {
            return "Error al preparar la consulta: " . $cone->error;
        }

        // Vincular los parámetros
        $stmt->bind_param(
            "issssss",
            $datos['id_usu'],
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


// <?php
// class CargarInformacion
// {
//     private $cone;

//     public function __construct()
//     {
//         $conexion = new Conectar();
//         $this->cone = $conexion->conexion();
//     }

//     public function guardarUsu($registro)
//     {
//         $query = "INSERT INTO usuarios_wsp(rol_usu, nombre, correo, clave) VALUES ('2', ?, ?, ?);";
//         $stmt = $this->cone->prepare($query);

//         if (!$stmt) {
//             return "Error en la preparación de la consulta: " . $this->cone->error;
//         }

//         $stmt->bind_param(
//             "sss",
//             $registro['nombre'],
//             $registro['correo'],
//             $registro['clave']
//         );

//         $resultado = $stmt->execute();
//         $stmt->close();

//         return $resultado ? true : "Error en la ejecución: " . $this->cone->error;
//     }

//     public function guardarGrupo($datos)
//     {
//         $query = "INSERT INTO grupos_wsp (id_catego, nombre_grupo, enlace_grupo, descripcion_grupo, pclave_grupo, img_grupo) 
//                   VALUES (?, ?, ?, ?, ?, ?)";
//         $stmt = $this->cone->prepare($query);

//         if (!$stmt) {
//             return "Error en la preparación de la consulta: " . $this->cone->error;
//         }

//         $stmt->bind_param(
//             "ssssss",
//             $datos['categorias'],
//             $datos['nombre'],
//             $datos['enlace'],
//             $datos['descripcion'],
//             $datos['palabraclave'],
//             $datos['imagen']
//         );

//         $resultado = $stmt->execute();
//         $stmt->close();

//         return $resultado ? true : "Error en la ejecución: " . $this->cone->error;
//     }

//     public function guardarCategoria($nombre)
//     {
//         $query = "INSERT INTO categorias_wsp(nombre_categoria) VALUES (?)";
//         $stmt = $this->cone->prepare($query);

//         if (!$stmt) {
//             return "Error en la preparación de la consulta: " . $this->cone->error;
//         }

//         $stmt->bind_param("s", $nombre);
//         $resultado = $stmt->execute();
//         $stmt->close();

//         return $resultado ? true : "Error en la ejecución: " . $this->cone->error;
//     }

//     public function __destruct()
//     {
//         $this->cone->close();
//     }
// }
