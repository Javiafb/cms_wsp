<?php

class conectar
{

    public function conexion()
    {

        $host = "localhost";
        $user = "root";
        $pass = "";
        $bd = "cms_wsp";


        $conexion = mysqli_connect($host, $user, $pass, $bd);

        if (mysqli_connect_errno()) {

            echo "hubo un error en la conexion" . mysqli_connect_error();
            exit();
        }

        mysqli_set_charset($conexion, "utf8mb4");


        return $conexion;
    }
}
