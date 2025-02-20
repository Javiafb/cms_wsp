<?php
class model_grupo
{
    public function grupos_info()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $sql = "SELECT 
                g.grupo_id,  
                g.id_usu, 
                g.id_catego, 
                g.nombre_grupo, 
                g.enlace_grupo, 
                g.descripcion_grupo, 
                g.pclave_grupo, 
                g.img_grupo, 
                c.nombre_categoria
            FROM grupos_wsp g
            JOIN categorias_wsp c ON g.id_catego = c.id_cate;
        ";

        $consulta = mysqli_query($cone, $sql);

        mysqli_close($cone);

        return $consulta;
    }
    public function grupos_infousu()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $sesion = $_SESSION['uid'];

        $sql = "SELECT 
                g.grupo_id,  
                g.id_usu, 
                g.id_catego, 
                g.nombre_grupo, 
                g.enlace_grupo, 
                g.descripcion_grupo, 
                g.pclave_grupo, 
                g.img_grupo, 
                c.nombre_categoria
            FROM grupos_wsp g
            JOIN categorias_wsp c ON g.id_catego = c.id_cate WHERE g.id_usu = $sesion;
        ";

        $consulta = mysqli_query($cone, $sql);

        mysqli_close($cone);

        return $consulta;
    }

    public function contar_grupos()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $sql = "SELECT COUNT(*) as total_grupos FROM grupos_wsp";

        $consulta = mysqli_query($cone, $sql);
        $resultado = mysqli_fetch_assoc($consulta);

        mysqli_close($cone);

        return $resultado['total_grupos'];
    }


    public function top_usuarios_grupos()
    {
        $conectar = new conectar();
        $cone = $conectar->conexion();

        $sql = "SELECT u.id_usu, u.nombre,  COUNT(g.grupo_id) as total_grupos 
                FROM usuarios_wsp u
                JOIN grupos_wsp g ON u.id_usu = g.id_usu
                GROUP BY u.id_usu, u.nombre
                ORDER BY total_grupos DESC
                LIMIT 5";

        $consulta = mysqli_query($cone, $sql);
        $usuarios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $usuarios[] = $row;
        }

        mysqli_close($cone);

        return $usuarios;
    }
}
