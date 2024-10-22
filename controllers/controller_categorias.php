<?php

class controller_categorias
{

    public function categoria()
    {

        $infor = new Model_categoria();
        $obtener = $infor->categorias();

        $ver = [];

        while ($row = mysqli_fetch_assoc($obtener)) {
            $ver[] = $row;
        }
        echo '
       <div class="widget catagory mb-50">
        <!-- Widget Title -->
        <h6 class="widget-title mb-30">Categorias</h6>

        <!--  Catagories  -->
        <div class="catagories-menu">
            <ul> ';
        foreach ($ver as $info) {
            echo '
                <li class="active"><a href="views/grupos_espe.php?categ=' . $info['id_cate'] . '">' . $info['nombre_categoria'] . '</a></li>';
        }
        echo ' </ul>
        </div>
    </div>';
    }

    public function categorias_grupo()
    {

        $categoriasinfo = new Model_categoria();
        $resultado = $categoriasinfo->gru_categorias();

        $query = [];

        while ($row = mysqli_fetch_assoc($resultado)) {
            $query[] = $row;
        }

        foreach ($resultado as $row) {


            echo '  <!-- grupos Area -->
            <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <!-- Product Image -->
                    <div class="product-img">
                        <img src="./public/img/grupo-img/' . $row['img_grupo'] . '" alt="">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="./public/img/grupo-img/' . $row['img_grupo'] . '" alt="">
                    </div>

                    <!-- Product Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- Product Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">' . $row['nombre_categoria'] . '</p>
                            <a href="#">
                                <h6>' . $row['nombre_grupo'] . '</h6>
                            </a>
                        </div>
                        <!-- Ratings & Cart -->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <a href="./views/detalles.php?v=' . $row['grupo_id'] . '"><button class="deta">detalles</button></a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    public function categorias_grupo_espe($id)
    {

        $categoriasinfo = new Model_categoria();
        $resultado = $categoriasinfo->gru_categorias_espe($id);

        $query = [];

        while ($row = mysqli_fetch_assoc($resultado)) {
            $query[] = $row;
        }

        foreach ($resultado as $row) {


            echo '
               <div class="col-12 col-sm-6 col-md-12 col-xl-6">
                <div class="single-product-wrapper">
                    <div class="product-img">
                        <img src="../public/img/grupo-img/' . $row['img_grupo'] . '" alt="">
                        <!-- Hover Thumb -->
                        <img class="hover-img" src="../public/img/grupo-img/' . $row['img_grupo'] . '" alt="">
                    </div>

                    <!-- grupo Description -->
                    <div class="product-description d-flex align-items-center justify-content-between">
                        <!-- grupo Meta Data -->
                        <div class="product-meta-data">
                            <div class="line"></div>
                            <p class="product-price">' . $row['nombre_categoria'] . '</p>
                            <a href="#">
                                <h6>' . $row['nombre_grupo'] . '</h6>
                            </a>
                        </div>
                        <!-- detalles-->
                        <div class="ratings-cart text-right">
                            <div class="ratings">
                                <a href="../views/detalles.php?v=' . $row['grupo_id'] . '"><button class="deta">detalles</button></a>
                            </div>

                            <div class="cart">
                                <a href="#" data-toggle="tooltip" data-placement="left" title="" data-original-title="activo">🟢</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            ';
        }
    }


    public function prueba()

    {
        echo 'hola';
    }
}
