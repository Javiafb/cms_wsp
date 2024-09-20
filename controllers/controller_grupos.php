<?php


class controller_grup
{
    public function grupos()
    {
        $modelo = new model_grup();
        $resultado = $modelo->query_grupos();

        $grupos = [];

        // Guardar todas las filas en el array
        while ($row = mysqli_fetch_assoc($resultado)) {
            $grupos[] = $row;
        }

        // Iterar sobre el array con foreach
        foreach ($grupos as $grupo) {
            echo '
            <!-- grups -->
            <div class="single-products-catagory clearfix">
                <a href="shop.html">
                    <img src="./public/img/grupo-img/' . $grupo['img_grupo'] . '" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p style="color:yellow;">' . htmlspecialchars($grupo['nombre_grupo']) . '</p>
                        <h4>' . htmlspecialchars($grupo['pclave_grupo']) . '</h4>
                    </div>
                </a>
            </div> 
            ';
        }
    }
    
}
