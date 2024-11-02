<?php

require_once 'content/header.php'

?>

<div class="amado_product_area section-padding-100">

    <style>
        @media only screen and (min-width: 1200px) {
            .container-fluid {
                width: 900px;
            }
        }
    </style>


    <div class="row">
        <div class="col-12">
            <div class="product-topbar d-xl-flex align-items-end justify-content-between">

                <!-- categorias -->
                <div class="product-sorting d-flex">
                    <div class="sort-by-date d-flex align-items-center mr-15">
                        <p>Categorias</p>
                        <form action="#" method="get">
                            <select name="select" id="sortBydate">
                                <option value="value">Anime</option>
                                <option value="value">ciencia</option>
                                <option value="value">Popular</option>
                            </select>
                        </form>
                    </div>

                </div>
                <!-- categorias -->

            </div>
        </div>

    </div>



    <div class="container-fluid">
        <div class="row">

            <!--  Area grupos -->

            <?php

            require_once '../controllers/controller_categorias.php';
            require_once '../models/model_categoria.php';
            require_once '../controllers/conexion.php';

            $id = $_GET['categ'];


            $categru = new controller_categorias();
            $categru->categorias_grupo_espe($id);


            ?>


        </div>

        <div class="row">
            <div class="col-12">
                <!-- Pagination -->
                <nav aria-label="navigation">
                    <ul class="pagination justify-content-end mt-50">
                        <li class="page-item active"><a class="page-link" href="#">01.</a></li>
                        <li class="page-item"><a class="page-link" href="#">02.</a></li>
                        <li class="page-item"><a class="page-link" href="#">03.</a></li>
                        <li class="page-item"><a class="page-link" href="#">04.</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
</div>

<?php require_once 'content/footer.php' ?>