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
}
