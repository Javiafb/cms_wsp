<?php
$estilos = 'http://localhost/cms_wsp/public/';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title  -->
    <title>CMS | WSP</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?php echo $estilos ?>img/core-img/logoti.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="<?php echo $estilos ?>css/core-style.css">
    <link rel="stylesheet" href="<?php echo $estilos ?>style.css">

</head>

<body>
    <!-- Search Wrapper Area Start -->
    <div class="search-wrapper section-padding-100">
        <div class="search-close">
            <i class="fa fa-close" aria-hidden="true"></i>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-content">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Buscar...">
                            <button type="submit"><img src="<?php echo $estilos ?>img/core-img/search.png" alt=""></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Wrapper Area End -->

    <!-- ##### Main Content Wrapper Start ##### -->
    <div class="main-content-wrapper d-flex clearfix">

        <!-- Mobile Nav (max width 767px)-->
        <div class="mobile-nav">
            <!-- Navbar Brand -->
            <div class="amado-navbar-brand">
                <a href="index.html"><img src="<?php echo $estilos ?>img/core-img/logoti.png" alt=""></a>
            </div>
            <!-- Navbar Toggler -->
            <div class="amado-navbar-toggler">
                <span></span><span></span><span></span>
            </div>
        </div>

        <!-- Header Area Start -->
        <header class="header-area clearfix">
            <!-- Close Icon -->
            <div class="nav-close">
                <i class="fa fa-close" aria-hidden="true"></i>
            </div>
            <!-- Logo -->
            <div class="logo">
                <a href="index.html"><img src="<?php echo $estilos ?>img/core-img/logoti.png" alt="" width="130px"></a>
            </div>
            <!-- Amado Nav -->
            <nav class="amado-nav">
                <ul>
                    <li class="active"><a href="/cms_wsp/index">Inicio</a></li>
                    <li><a href="/cms_wsp/categorias">Categorias</a></li>
                    <li><a href="/cms_wsp/grupos">Grupos</a></li>
                </ul>
            </nav>

            <!-- Button Group -->
            <div class="amado-btn-group mt-30 mb-100">
                <a href="/cms_wsp/admin/panel/register" class="btn amado-btn mb-15">Registrate</a>
                <a href="/cms_wsp/admin/panel/login" class="btn amado-btn active" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar sesion</a>
            </div>
            <!-- Cart Menu -->
            <div class="cart-fav-search mb-100">
                <a href="#" class="search-nav"><img src="<?php echo $estilos ?>/img/core-img/search.png" alt="">Buscar grupo...</a>
            </div>
            <!-- Social Button -->
            <div class="social-info d-flex justify-content-between">
                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </header>
        <!-- Header Area End -->