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
}
