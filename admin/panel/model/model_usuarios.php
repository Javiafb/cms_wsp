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

    public function contar_usuarios()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $sql = "SELECT COUNT(*) as total_usuarios FROM usuarios_wsp";

        $consulta = mysqli_query($cone, $sql);
        $resultado = mysqli_fetch_assoc($consulta);

        mysqli_close($cone);

        return $resultado['total_usuarios'];
    }
}
