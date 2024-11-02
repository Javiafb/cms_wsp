<!-- ##### Newsletter Area Start ##### -->
<!-- <section class="newsletter-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-7">
                <div class="newsletter-text mb-100">
                    <h2>Subscribe for a <span>25% Discount</span></h2>
                    <p>Nulla ac convallis lorem, eget euismod nisl. Donec in libero sit amet mi vulputate consectetur. Donec auctor interdum purus, ac finibus massa bibendum nec.</p>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-5">
                <div class="newsletter-form mb-100">
                    <form action="#" method="post">
                        <input type="email" name="email" class="nl-email" placeholder="Your E-mail">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section> -->


<!-- ##### Footer Area Start ##### -->
<footer class="footer_area clearfix">
    <div class="container">
        <div class="row align-items-center">
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-4">
                <div class="single_widget_area">
                    <!-- Logo -->
                    <div class="footer-logo mr-50">
                        <a href="index.html"><img src="<?php echo $estilos ?>img/core-img/logoti.png" alt=""></a>
                    </div>
                    <!-- Copywrite Text -->
                    <p class="copywrite">
                        Copyright &copy;<script>
                            document.write(new Date().getFullYear());
                        </script> Todos los derechos reservados | desarrollado <i class="fa fa-bolt" aria-hidden="true"></i> por <a href="https://github.com/Javiafb" target="_blank">Javiafb</a>
                    </p>
                </div>
            </div>
            <!-- Single Widget Area -->
            <div class="col-12 col-lg-8">
                <div class="single_widget_area">
                    <!-- Footer Menu -->
                    <div class="footer_menu">
                        <nav class="navbar navbar-expand-lg justify-content-end">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                            <div class="collapse navbar-collapse" id="footerNavContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="index">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="categorias">Categoria</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="grupos">Grupos</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area End ##### -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Crear Grupo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">✖️</button>
            </div>
            <div class="modal-body">
                <form method="post" enctype="multipart/form-data" id="formularioGrupo">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required id="nombre" placeholder="Ingresa el nombre del grupo">
                    </div>

                    <div class="mb-3">
                        <label for="palabraclave" class="form-label">Palabra Clave</label>
                        <input type="text" class="form-control" name="palabraclave" required id="palabraclave" placeholder="Ingresa la palabra clave">
                    </div>

                    <div class="mb-3">
                        <label for="textarea" class="form-label">Descripción</label>
                        <textarea class="form-control" name="descripcion" required id="textarea" rows="3" placeholder="Ingresa la descripción"></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input type="file" class="form-control" name="imagen" required id="imagen">
                    </div>

                    <div class="mb-3">
                        <label for="enlace" class="form-label">enlace</label>
                        <input type="url" class="form-control" name="enlace" required id="textarea" rows="3" placeholder="Ingresa el enlace del grupo"></input>
                    </div>
                    <?php

                    $optionselect = new controller_categorias();
                    $optionselect->carga_cartegorias();

                    ?>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" form="formularioGrupo">Guardar</button>
            </div>
        </div>
    </div>
</div>




<!-- ##### jQuery (Necessary for All JavaScript Plugins) ##### -->
<script src="<?php echo $estilos ?>js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="<?php echo $estilos ?>js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="<?php echo $estilos ?>js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Plugins js -->
<script src="<?php echo $estilos ?>js/plugins.js"></script>
<!-- Active js -->
<script src="<?php echo $estilos ?>js/active.js"></script>

</body>

</html>

