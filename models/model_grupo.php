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
}
