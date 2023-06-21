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
                    Departamentos
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Departamentos 
                    </li>
                </ol>
            </div>
        </div>
        <div><?php echo $this->mensaje; ?></div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-info">
                    <a href="<?php echo constant('URL')?>departamento/registrar">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                Agregar
                            </h1>
                            <h6 class="text-white">
                                Agregar Departamentos
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-primary card-inverse">
                    <a href="<?php echo constant('URL')?>departamento/consultar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Consultar
                            </h1>
                            <h6 class="text-white">
                                Consultar Departamentos
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-success">
                    <a href="<?php echo constant('URL')?>departamento/registrar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Actualizar
                            </h1>
                            <h6 class="text-white">
                                Actualizar Departamentos
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-danger">
                    <a href="<?php echo constant('URL')?>departamento/consultar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                Eliminar
                            </h1>
                            <h6 class="text-white">
                                Eliminar Departamentos
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
