<?php 

class categorias {


    public function obt_categorias(){

        $modelo = new categorias();
        $resultado = $modelo->obt_categorias();

        $categorias = [];

        while($row = mysqli_fetch_assoc($resultado)){
            $categorias[] = $row;

        }

        foreach ($categorias as $cate) {
           
            echo '
            
            
            
            
            ';
        }



    }


}









?>