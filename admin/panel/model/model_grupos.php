<?php


class model_grupo
{

    public function grupos_info()
    {

        $conectar = new conectar();
        $cone = $conectar->conexion();


        $consulta = mysqli_query($cone, "SELECT * FROM grupos_wsp");

        mysqli_close($cone);

        return $consulta;
    }
}
