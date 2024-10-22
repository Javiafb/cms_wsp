<?php

class controller_detalle
{
    public function detalles($id)
    {
        $modeloDetalles = new Model_detalles();
        $resultado = $modeloDetalles->detall($id);

        if (mysqli_num_rows($resultado) > 0) {
            $datos = mysqli_fetch_assoc($resultado);

            echo '
            <div class="single-product-area section-padding-100 clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-lg-7">
                            <div class="single_product_thumb">
                                <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image:url(../public/img/grupo-img/' . $datos['img_grupo'] . ')">
                                        </li>
                                        <!-- Más elementos del slider si los necesitas -->
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a class="gallery_img" href="../public/img/grupo-img/' . $datos['img_grupo'] . '">
                                                <img class="d-block w-100" src="../public/img/grupo-img/' . $datos['img_grupo'] . '" alt="First slide">
                                            </a>
                                        </div>
                                        <!-- Más imágenes si las necesitas -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">
                        <div class="single_product_desc">
                            
                            <div class="product-meta-data">
                                <div class="line"></div>
                                <p class="product-price">' . $datos['nombre_categoria'] . '</p>
                                <a href="#">
                                    <h6>' . $datos['nombre_grupo'] . '</h6>
                                </a>
                               
                                <!-- estado -->
                                <p class="avaibility"><i class="fa fa-circle"></i> En linea</p>
                            </div>

                            <div class="short_overview my-5">
                                <p>' . $datos['descripcion_grupo'] . '</p>
                            </div>

                            <!-- unirse al grupo -->
                            <div class="cart clearfix">
                                <a href="https://chat.whatsapp.com/F4uwdYFxB2LGq9FuwgHY8W">
                                <button class="btn amado-btn">Unirte <img src="../public/img/core-img/whatsapp.png" style="width:35px"></button>
                                </a>
                            </div>

                        </div>
                    </div>
                    </div>
                </div>
            </div>';
        } else {
            echo "No se encontraron detalles para este grupo.";
        }
    }
}
