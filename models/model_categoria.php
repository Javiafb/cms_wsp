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

        $query = mysqli_query($cone, "SELECT g.grupo_id,g.id_usu,g.id_catego,g.nombre_grupo,g.enlace_grupo,g.descripcion_grupo,g.pclave_grupo,g.img_grupo,c.id_cate,c.nombre_categoria FROM grupos_wsp g , categorias_wsp c ");

        mysqli_close($cone);

        return $query;
    }
}
