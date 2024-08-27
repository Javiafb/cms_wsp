<?php

class conectar
{

    public function conex()
    {

        $host = "localhost";
        $usuario = "root";
        $pass = " ";
        $bd = "cms_wsp";


        $conexion = mysqli_connect($host, $usuario, $pass, $bd);

        if (mysqli_connect_errno()) {
            echo 'error en la conexion';
        }

        mysqli_set_charset($conexion, 'Utf8-4');

        mysqli_select_db($conexion, $bd) or die("no se encontro la base de datos");

        mysqli_close($conexion);
    }
}
