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
                    Apartamentos
                </h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">
                            Inicio
                        </a>
                    </li>
                    <li class="breadcrumb-item active">
                        Actualizar
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
                <div class="card" id="contenido"> 
                    <form action='<?php echo constant("URL")."departamento/ApartamentoEditar/".$datos["id_apartamento"];?>' enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                <?php foreach($this->departamento as $datos){?> 
                    <?php $dato= explode("/", BASE_URL); ?>
                        <?php  if ($datos["id_apartamento"] == $dato[8]) { ?>
                        <div class="card-block">
                            <div class="form-group row justify-content-center">
                                <div class="card">
                                    <h1 class="text-themecolor">
                                        Actualizar Apartamentos
                                    </h1>
                                </div>
                                <div class="col-md-12 ">
                                    <label for="apartamento">
                                        Nombre de Apartamento
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-city prefix">
                                            </i>
                                        </div>
                                        <input class="form-control" id="apartamento" name="nombre" placeholder="Nombre" type="text" value="<?php echo $datos["nombre"]?>">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-6 m-t-10">
                                    <label for="ubicacion">
                                        Ubicacion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-google-maps prefix">
                                            </i>
                                        </div>
                                        <input class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicacion" type="text" value="<?php echo $datos["ubicacion"]?>">
                                        </input>
                                    </div>
                                </div>
                                <div class="col-md-6 m-t-10">
                                    <label for="capacidad">
                                        Capacidad
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-account-multiple-plus prefix">
                                            </i>
                                        </div>
                                        <input class="form-control" id="capacidad" name="capacidad" placeholder="Capacidad" type="text" value="<?php echo $datos["capacidad"]?>">
                                        </input>
                                    </div> 
                                </div>
                                <div class="col-12 m-t-10">
                                    <label for="mes">
                                        Mes de Ocupacion
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="icon-calender">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="mes" name="mes" style="width: 100%!important;">
                                            <option value="<?php echo $datos["mes"]?>">
                                                <?php echo $datos["mes"]?>
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
                                <div class="col-md-12 m-t-10">
                                    <label for="descripcion">
                                        Descripcion
                                    </label>
                                    <div class="input-group">
                                        <textarea class="form-control" cols="5" id="descripcion" rows="5" name="descripcion">
                                            <?php echo $datos["descripcion"]?>
                                        </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center m-t-10">
                                <div class="col-xs-12">
                                    <label class="text-themecolor" for="">
                                        Ocupado
                                    </label>
                                    <div class="switchery-demo m-b-20">
                                        <div class="form-check">
                                            <label class="custom-control custom-radio">
                                                <input id="radio2" name="estado" type="radio" class="custom-control-input" value="Disponible">
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">No</span>
                                            </label>
                                            <label class="custom-control custom-radio">
                                                <input id="radio1" name="estado" type="radio" class="custom-control-input" value="Ocupado" checked>
                                                <span class="custom-control-indicator"></span>
                                                <span class="custom-control-description">Si</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                           </div>
                     <?php  } ?>
                <?php } ?>       
                            <div class="form-group text-center m-t-20">
                                <div class="col-xs-12">
                                    
                                    <input class="btn btn-success " type="submit" value="Actualizar" id="Actualizar">

                                    <button class="btn btn-danger waves-effect waves-light" type="reset">
                                        Limpiar
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
