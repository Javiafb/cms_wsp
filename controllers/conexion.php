<?php

class conectar
{
    public function conex()
    {
        $host = "localhost";
        $usuario = "root";
        $pass = "";
        $bd = "cms_wsp";

        $conexion = mysqli_connect($host, $usuario, $pass, $bd);

        if (mysqli_connect_errno()) {
            echo 'Error en la conexión: ' . mysqli_connect_error();
            exit();
        }
        mysqli_set_charset($conexion, 'utf8mb4');

        return $conexion;
    }
}
