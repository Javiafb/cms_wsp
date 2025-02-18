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
}
