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
                    Deuda
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Pagar
                    </li>
                </ol>
            </div>
        </div>
        <div>
            <?php echo $this->mensaje; ?> 
        </div>
        <!-- ============================================================== -->
        <!-- FIN CABECERA -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- COMIENZA EL CONTENIDO DE LA PAGINA -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-lg">
                <!-- Column -->
                <div class="card">
                    <div class="card-block"> 
                        <form action="<?php echo constant('URL'); ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <h2 class="card-title text-center text-themecolor">
                            Pago de  Deudas
                        </h2>
                        
                        <div class="col-12 m-t-10">
                                    <label for="mes">
                                        Apartamentos
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-home-modern">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="apartamento" name="id_apartamento" style="width: 100%!important;">
                                            <option selected=""> 
                                                Selecione...
                                            </option>
                                        <?php foreach($this->departamento as $datos){?>
                                            <option value="<?php echo $datos["id_apartamento"]?>">
                                                <?php echo $datos["nombre"];?>

                                            </option>
                                         <?php } ?>     
                                        </select>
                                    </div>
                                </div> 
                        <div class="col-12 m-t-20">
                            <label for="pago">
                                Metodo de Pago
                            </label>
                            <div class="row">

                            <div class="col-4">

                                <button class="btn btn-lg btn-block btn-danger " type="button" aria-hidden="true" data-placement="bottom" data-target="#deuda" data-toggle="modal"  id="pago" >
                                        Pago Completo
                                </button>

                            </div>

                            <div class="col-4">

                                <button class="btn btn-lg btn-block btn-primary " type="button" aria-hidden="true" data-placement="bottom" data-target="#deuda" data-toggle="modal"  id="pago">
                                        Pago por Mes
                                </button>

                            </div>

                            <div class="col-4">
                                <button class="btn btn-lg btn-block btn-info"  type="button" aria-hidden="true" data-placement="bottom" data-target="#deuda" data-toggle="modal" id="pago">
                                    Pago por Abonos
                                </button>
                            </div>
                            </div>
                        </div>
                       <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <button class="btn btn-success waves-effect waves-light m-r-10" type="submit">
                                        Pagar
                                    </button>
                                    <button class="btn btn-danger waves-effect waves-light" type="reset">
                                        Limpiar
                                    </button>
 
                                </div>
                            </div>
                    </form>         
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
<?php include_once modal."modal-deuda.php"; ?>