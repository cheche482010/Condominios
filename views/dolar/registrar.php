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
        <!-- ============================================================== -->
        <!-- UNA PEQUEÑA CABECERA -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-6 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    Dolar
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Registrar   
                    </li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- FIN CABECERA -->
        <!-- ============================================================== -->
        <div><?php echo $this->mensaje; ?></div>
        <!-- ============================================================== -->
        <!-- COMIENZA EL CONTENIDO DE LA PAGINA -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg">
                <div class="card"> 
                    <form action="<?php echo constant('URL'); ?>dolar/dolarRegistrar/" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <input type="hidden" name="CRUD" value="registrar">
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Registrar Precio Del Dolar
                                    </h1>
                                </div>
                                <div class="col-12 m-t-10">
                                    <label for="mes">
                                        Mes
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-calender">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="mes" name="mes" style="width: 100%!important;">
                                            <option selected="">
                                                Selecione...
                                            </option>
                                            <option value="Enero">
                                                Enero
                                            </option>
                                            <option value="Febrero">
                                                Febrero
                                            </option>
                                            <option value="Marzo">
                                                Marzo
                                            </option>
                                            <option value="Abril">
                                                Abril
                                            </option>
                                            <option value="Mayo">
                                                Mayo
                                            </option>
                                            <option value="Junio">
                                                Junio
                                            </option>
                                            <option value="Julio">
                                                Julio
                                            </option>
                                            <option value="Agosto">
                                                Agosto
                                            </option>
                                            <option value="Septiembre">
                                                Septiembre
                                            </option>
                                            <option value="Octubre">
                                                Octubre
                                            </option>
                                            <option value="Noviembre">
                                                Noviembre
                                            </option>
                                            <option value="Diciembre">
                                                Diciembre
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 m-t-10">
                                    <label for="anio">
                                        Año
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-calendar-multiple prefix">
                                            </i>
                                        </div>
                                        <input class="form-control input-number" id="anio" name="anio" placeholder="Año" type="text">
                                        </input>
                                    </div>
                                </div> 
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="col-form-label" for="precio">
                                            Valor del Dolar
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon ">
                                                <i aria-hidden="true" class="fa fa-money">
                                                </i>
                                            </div>
                                            <input class="form-control input-number" id="precio" name="precio" placeholder="Bolivares" type="text">
                                            </input>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label class="col-form-label" for="mensualidad">
                                            Mensualidad de Departamentos
                                        </label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i aria-hidden="true" class="fa fa-money">
                                                </i>
                                            </div>
                                            <input class="form-control input-number" id="mensualidad" name="mensualidad" placeholder="Mensualidad" type="text">
                                            </input>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group text-center m-t-20">
                                    <div class="col-xs-12">
                                        <button class="btn btn-success waves-effect waves-light m-r-10" type="submit">
                                            Guardar
                                        </button>
                                        <button class="btn btn-danger waves-effect waves-light" type="reset">
                                            Limpiar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
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
