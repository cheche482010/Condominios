<!DOCTYPE html>
<html lang="es">
    <head>
        <?php include (call."Meta.php"); ?>
        <?php include (call."Link.php"); ?>
        <title>
            Sistema De Departamentos
        </title>
        <?php include (call."Header.php"); ?>
    </head>
    <body class="fix-header fix-sidebar card-no-border">
<!-- ============================================================== -->
<!-- Inicio contenido de pagina -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    Dolar
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Dolar
                    </li>
                </ol>
            </div>
            <div><?php echo $this->mensaje; ?></div>
            <div class="col-12 card">
                <div class="card-block">
                    <center>
                        <h3>
                            Precio Actual
                        </h3>
                        <h1 class="text-themecolor m-b-0 m-t-0">
                            240.365,00
                        </h1>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Column -->
            
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-4">
                <div class="card card-primary card-inverse">
                    <a href="<?php echo constant('URL')?>dolar/consultar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Consultar
                            </h1>
                            <h6 class="text-white">
                                Consultar Precios Anteriores
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-4">
                <div class="card card-inverse card-success">
                    <a href="<?php echo constant('URL')?>dolar/registrar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Actualizar
                            </h1>
                            <h6 class="text-white">
                                Actualizar Precio del Dolar
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-4 col-xlg-4">
                <div class="card card-inverse card-danger">
                    <a href="<?php echo constant('URL')?>dolar/consultar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Eliminar
                            </h1>
                            <h6 class="text-white">
                                Eliminar Estados Anteriores
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================================================== -->
<!-- Final contenido de pagina -->
<!-- ============================================================== -->
       <?php include (call."Footer.php"); ?> 
       <?php include (call."Script.php"); ?>
    </body>
</html>
