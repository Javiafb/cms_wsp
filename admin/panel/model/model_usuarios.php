<?php


class usuarios_tabla
{

    public function usu()
    {

        $conectar = new conectar();
        $cone = $conectar->conexion();


        $query = mysqli_query($cone, "SELECT * FROM usuarios_wsp");
        mysqli_close($cone);

        return $query;
    }
}
