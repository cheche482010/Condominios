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
                        Convertir
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
                    <form action="" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        
                        <div class="card-block">
                            <div class="form-group row">
                                <div class="col-md-11">
                                    <label style="font-size: 12px;">
                                        Mes
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-calendar">
                                            </i>
                                        </div>
                                        
                                        <select class="custom-select" id="mes" name="mes" style="width: 100%!important;">
                                            <option selected="">
                                                Selecione...
                                            </option>
                                             <?php foreach($this->dolar as $datos){ ?> 
                                            <option  value="<?php echo $datos["mes"]." ".$datos["anio"]?>">
                                                <?php echo $datos["mes"]." ".$datos["anio"]?>
                                            </option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-1 m-t-30 ">
                                    <button class="btn btn-info" id="buscar" type="button">
                                        <i class="fa fa-search">
                                        </i>
                                    </button>
                                </div>
                                <div class="col-md-12">
                                    <label style="font-size: 12px;">
                                        Precio del Mes
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-coin prefix">
                                            </i>
                                        </div>
                                        <input class="form-control" id="estado" name="estado" placeholder=""  type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <img alt="bolivar" class="img-circle" src="<?php echo constant('URL')?>assets/images/bolivar.jpg" width="95"/>
                                    </center>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i aria-hidden="true" class="fa fa-money">
                                            </i>
                                        </div>
                                        <input class="form-control input-number" id="bolivar" name="bolivar" placeholder="Bolivar" type="text">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <center>
                                        <img alt="dolar" class="img-circle" src="<?php echo constant('URL')?>assets/images/dolar.jpg" width="100"/>
                                    </center>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-coin prefix">
                                            </i>
                                        </div>
                                        <input class="form-control" id="dolar" name="dolar" placeholder="Dolar" type="text" value="">
                                        </input>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    <button class="btn btn-success waves-effect waves-light m-r-10" type="button" id="convertir">
                                        Convertir
                                    </button>
                                    <button class="btn btn-info waves-effect waves-light" type="button">
                                        Guardar
                                    </button>
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
