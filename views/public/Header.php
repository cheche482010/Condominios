 <!-- ============================================================== -->
    <!-- Circulo mientras carga la pagina -->
    <!-- ============================================================== -->
<div class="preloader">
    <svg class="circular" viewbox="25 25 50 50">
        <circle class="path" cx="50" cy="50" fill="none" r="20" stroke-miterlimit="10" stroke-width="2">
        </circle>
    </svg>
    </div>
<div id="main-wrapper">
        
<header class="topbar">
    <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto mt-md-0 ">
                <li class="nav-item">
                    <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="ti-menu">
                        </i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="icon-arrow-left-circle">
                        </i>
                    </a>
                </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Perfil y buscar  -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <!-- <a href="" class="nav-link dropdown-toggle text-muted waves-effect waves-dark">
                        <i class="ti-settings" style="width: 40px; height: 40px">
                        </i>
                    </a> -->
                    <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle text-muted waves-effect waves-dark" data-toggle="dropdown" href="">
                        <i class="ti-settings" style="width: 40px; height: 40px">
                        </i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                        <ul class="dropdown-user">
                            <li class="divider" role="separator">
                            </li>
                            <a class="dropdown-item" href="#">
                                <i class="ti-settings">
                                </i>
                                Editar Perfil
                            </a>
                            <div class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="?url=inicio&area=destroid">
                                <i class="fa fa-power-off">
                                </i>
                                Cerrar Sesión
                            </a>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

     

<aside class="left-sidebar">
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    Inicio
                </li>
                <li>
                    <a href="<?php echo constant('URL'); ?>main">
                        <i class="mdi mdi-home">
                        </i>
                        <span class="hide-menu m-l-20">
                            Inicio
                        </span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    Dolar
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-cash-multiple">
                        </i>
                        
                        <span class="hide-menu m-l-20">
                            Dolar
                        </span>
                       
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>dolar/registrar">
                                Registrar  Precio
                            </a>
                        </li>
                       <!--  <li>
                            <a href="<?php #echo constant('URL'); ?>dolar/convertir" >
                                Convertir  Dolar
                            </a>
                        </li> -->
                        <li>
                            <a href="<?php echo constant('URL'); ?>dolar/consultar">
                                Consultar Dolar
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-home-modern">
                        </i>
                        <span class="hide-menu m-l-20">
                            Departamentos
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>departamento/registrar">
                                Registrar
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>departamento/consultar">
                                Consultar
                            </a>
                        </li>
                        <!-- <li>
                            <a href="<?php #echo constant('URL'); ?>departamento/actualizar">
                                Actualizar
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li>
                    <a aria-expanded="false" class="has-arrow" href="#">
                        <i class="mdi mdi-book-open-page-variant">
                        </i>
                        
                        <span class="hide-menu m-l-20">
                            Deudas
                        </span>
                       
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="<?php echo constant('URL'); ?>deuda/consultar">
                             Ver Deudas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>deuda/mensualidad">
                             Mensualidades
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>deuda/asignar">
                                Asignar Deudas
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo constant('URL'); ?>deuda/pagar">
                                Pagar Deudas
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <div class="sidebar-footer">
        <!-- item-->
        <a class="link" data-toggle="tooltip" href="" title="Ajustes">
            <i class="ti-settings">
            </i>
        </a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" href="" title="Ayuda">
            <i class="mdi mdi-help-circle">
            </i>
        </a>
        <!-- item-->
        <a class="link" data-toggle="tooltip" href="" title="Cerrar Sesión">
            <i class="mdi mdi-power">
            </i>
        </a>
    </div>
</aside>
        <!-- ============================================================== -->
        <!-- Final de la barra navegadora  -->
        <!-- ============================================================== -->
    