<?php

class Model_categoria
{

    public function categorias()
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $query = mysqli_query($cone, "SELECT * FROM categorias_wsp");

        mysqli_close($cone);

        return $query;
    }

    public function gru_categorias()
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $query = mysqli_query($cone, "SELECT g.grupo_id, g.id_usu, g.id_catego, g.nombre_grupo, g.enlace_grupo, g.descripcion_grupo, g.pclave_grupo, g.img_grupo, c.id_cate, c.nombre_categoria
        FROM grupos_wsp g
        JOIN categorias_wsp c ON g.id_catego = c.id_cate");

        mysqli_close($cone);

        return $query;
    }

    public function gru_categorias_espe($id)
    {
        $conexion = new conectar();
        $cone = $conexion->conex();

        $query = mysqli_query(
            $cone,
            "SELECT g.grupo_id, g.id_usu, g.id_catego, g.nombre_grupo, g.enlace_grupo, g.descripcion_grupo, g.pclave_grupo, g.img_grupo, c.id_cate, c.nombre_categoria FROM grupos_wsp g JOIN categorias_wsp c ON g.id_catego = c.id_cate WHERE g.id_catego = $id"
        );


        mysqli_close($cone);

        return $query;
    }
}
