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
        <!-- <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-block">
                        <div class="col-md">
                            <center class="m-t-30">
                                <h3>
                                    Precio Actual
                                </h3>
                            </center>
                            <center class="m-t-30">
                                <h1 class="text-themecolor m-b-0 m-t-0">
                                
                                </h1>
                                <button class="btn" style="border: none;background: none;color: gray;" type="button">
                                    <i aria-hidden="true" class="fa fa-refresh fa-2x" data-placement="bottom" data-target="#actualizar" data-toggle="modal" title="Actualizar Precio">
                                    </i>
                                </button>
                                
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    Inicio
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Home
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Inicio
                    </li>
                </ol>
            </div>
        </div>
        <div><?php echo $this->mensaje; ?></div>
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-info">
                    <a href="<?php echo constant('URL')?>departamento">
                        <div class="box bg-info text-center">
                            <h1 class="font-light text-white">
                                75
                            </h1>
                            <h6 class="text-white">
                                Departamentos
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-primary card-inverse">
                    <a href="javascript:void(0)" class="NO-DISPONIBLE">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                7
                            </h1>
                            <h6 class="text-white">
                                Usuarios
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Column -->
            <div class="col-md-6 col-lg-3 col-xlg-3">
                <div class="card card-inverse card-success">
                    <a href="<?php echo constant('URL')?>dolar">
                        <div class="box text-center">
                            <h1 class="font-light text-white">
                                275.332
                            </h1>
                            <h6 class="text-white">
                                Dolar
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
                                10%
                            </h1>
                            <h6 class="text-white">
                                Deudas
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card earning-widget">
                    <div class="card-block b-t">
                        <table class="table v-middle no-border">
                            <tbody>
                                <tr>
                                    <td>
                                        <img alt="logo" class="img-circle" src="<?php echo constant('URL')?>assets/images/users/1.png" width="50"/>
                                    </td>
                                    <td>
                                        Jesus
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-light-success">
                                            Administrador
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:40px">
                                        <img alt="logo" class="img-circle" src="<?php echo constant('URL')?>assets/images/users/1.png" width="50"/>
                                    </td>
                                    <td>
                                        Jose
                                    </td>
                                    <td class="text-right">
                                        <span class="label label-light-info">
                                            Operador
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">
                                        #
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Estado
                                    </th>
                                    <th>
                                        Fecha
                                    </th>
                                    <th>
                                        Capital
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">
                                        1
                                    </td>
                                    <td class="txt-oflo">
                                        Luis Vargas
                                    </td>
                                    <td>
                                        <span class="label label-success label-rouded">
                                            Pago
                                        </span>
                                    </td>
                                    <td class="txt-oflo">
                                        April 18, 2017
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            $0
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        2
                                    </td>
                                    <td class="txt-oflo">
                                        Sin Ocupante
                                    </td>
                                    <td>
                                        <span class="label label-info label-rouded">
                                            Disponible
                                        </span>
                                    </td>
                                    <td class="txt-oflo">
                                        ...
                                    </td>
                                    <td>
                                        <span class="text-info">
                                            ...
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">
                                        3
                                    </td>
                                    <td class="txt-oflo">
                                        Daniel Perez
                                    </td>
                                    <td>
                                        <span class="label label-danger label-rouded">
                                            Deuda
                                        </span>
                                    </td>
                                    <td class="txt-oflo">
                                        April 20, 2017
                                    </td>
                                    <td>
                                        <span class="text-danger">
                                            -$24
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
