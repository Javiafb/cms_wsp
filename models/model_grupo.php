<?php

class model_grup
{
    public function query_grupos()
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $resultado = mysqli_query($cone, "SELECT * FROM grupos_wsp");

        mysqli_close($cone);

        return $resultado;
    }

    public function guardarDatosGrupo($datos)
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $idcate = mysqli_real_escape_string($cone, $datos['idcate']);
        $nombre = mysqli_real_escape_string($cone, $datos['nombre']);
        $enlace = mysqli_real_escape_string($cone, $datos['enlace']);
        $descripcion = mysqli_real_escape_string($cone, $datos['descripcion']);
        $palabraclave = mysqli_real_escape_string($cone, $datos['palabraclave']);
        $foto = mysqli_real_escape_string($cone, $datos['foto']);

        $sql = "INSERT INTO grupos_wsp (id_catego, nombre_grupo, enlace_grupo, descripcion_grupo, pclave_grupo, img_grupo) 
                VALUES ('$idcate', '$nombre', '$enlace', '$descripcion', '$palabraclave', '$foto')";

        if (mysqli_query($cone, $sql)) {
            echo "<script>
              alert('Datos guardados correctamente');
              window.location.href='/cms_wsp/index';
          </script>";
            exit();
        } else {
            $resultado = 'Error al guardar los datos: ' . mysqli_error($cone);
        }

        // Cerrar la conexión
        mysqli_close($cone);

        return $resultado;
    }
}

// funcion de carga instancia
$cargar = new controller_grup();
$cargar->guardar_grupos();
