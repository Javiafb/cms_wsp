<?php

class Model_detalles
{
    public function detall($id)
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $id = intval($id);

        $sql = "SELECT g.grupo_id, g.id_usu, g.id_catego, g.nombre_grupo, g.enlace_grupo, g.descripcion_grupo, 
                       g.pclave_grupo, g.img_grupo, c.id_cate, c.nombre_categoria 
                FROM grupos_wsp g 
                JOIN categorias_wsp c ON g.id_catego = c.id_cate 
                WHERE g.grupo_id = $id";

        $query = mysqli_query($cone, $sql);

        return $query;
    }
}
