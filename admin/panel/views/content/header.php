<?php
session_start();
if (!isset($_SESSION['rol'])) {
    if ($_SESSION['rol'] != 1 || $_SESSION['rol'] != 2) {
        header('location:login');
        exit();
    } else {
        header('location:index');
    }
}
?>
<?php
$rutas = 'http://localhost/cms_wsp/admin/panel/src/assets/';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | CMS WSP</title>
    <link rel="shortcut icon" type="image/png" href=" <?php echo $rutas ?>images/logos/logot.png" />
    <link rel="stylesheet" href=" <?php echo $rutas ?>css/styles.min.css" />

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</head>



<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="index" class="text-nowrap logo-img">
                        <img style="align-items: center;" src="<?php echo $rutas ?>images/logos/logot.png" width="80" alt="" />
                        <h3 class="card-title" style="text-align:center; display: inline-block">ADMIN CMS</h3>
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
                    <ul id="sidebarnav">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Inicio</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="index" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout-dashboard"></i>
                                </span>
                                <span class="hide-menu">Panel</span>
                            </a>
                        </li>
                        <?php if ($_SESSION['rol'] != 1): ?>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="grupo" aria-expanded="false">
                                    <span>
                                        <i class="ti ti-social"></i>
                                    </span>
                                    <span class="hide-menu">Mis grupos</span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php

                        if ($_SESSION['rol'] == 1) {
                            echo '<div class="user-a" style="display:block">';
                        } else {
                            echo '<div class="user-a" style="display:none">';
                        } ?>

                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Admin</span>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link" href="datos" aria-expanded="false">
                                <span>
                                    <i class="ti ti-database"></i>
                                </span>
                                <span class="hide-menu">Datos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="user" aria-expanded="false">
                                <span>
                                    <i class="ti ti-user"></i>
                                </span>
                                <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="cate" aria-expanded="false">
                                <span>
                                    <i class="ti ti-category"></i>
                                </span>
                                <span class="hide-menu">Categorias</span>
                            </a>
                        </li>
            </div>

            </ul>
            <div class="unlimited-access hide-menu bg-light-primary position-relative mb-7 mt-5 rounded">
                <div class="d-flex">
                    <div class="unlimited-access-title me-3">
                        <h6 class="fw-semibold fs-4 mb-6 text-dark w-85">Hola, Bienvenido <?php echo  $_SESSION['uname']; ?></h6>
                        <?php if ($_SESSION['rol'] == 1): ?>
                            <a href="javascript:void(0)" class="btn btn-warning fs-2 fw-semibold lh-sm">Admin</a>
                        <?php else: ?>
                            <a href="javascript:void(0)" class="btn btn-secondary fs-2 fw-semibold lh-sm">Usuario</a>
                        <?php endif; ?>

                    </div>
                    <div class="unlimited-access-img mt-5 ">
                        <img src=" <?php echo $rutas ?>images/backgrounds/storage.png" alt="" width="80px" class="img-fluid">
                    </div>
                </div>
            </div>
            </nav>
            <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
        <!--  Header Start -->
        <header class="app-header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav">
                    <li class="nav-item d-block d-xl-none">
                        <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
                <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        <!-- modal -->
                        <button type="button" class="btn btn-warning">
                            Hola, <?php echo  $_SESSION['uname']; ?>
                        </button>
                        <!-- modal -->

                        <li class="nav-item dropdown">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src=" <?php echo $rutas ?>images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                <div class="message-body">
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-user fs-6"></i>
                                        <p class="mb-0 fs-3">perfil</p>
                                    </a>
                                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-mail fs-6"></i>
                                        <p class="mb-0 fs-3">cuenta</p>
                                    </a>
                                    <a href="grupo" class="d-flex align-items-center gap-2 dropdown-item">
                                        <i class="ti ti-list-check fs-6"></i>
                                        <p class="mb-0 fs-3">grupos</p>
                                    </a>
                                    <a href="salir" class="btn btn-outline-danger mx-3 mt-2 d-block">salir</a>
                                </div>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!--  Header End -->