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
        <div>
            <?php echo $this->mensaje; ?> 
        </div>
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
                        Consultar
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
            <div class="col-lg">
                <!-- Column -->
                <div class="card">
                    <div class="card-block">
                        <h5 class="card-title">
                            Meses en deuda
                        </h5>
                       <div class="table-responsive">
                        <table class="table table-hover color-table info-table m-b-0 toggle-arrow-tiny" id="demo-foo-accordion">
                            <thead>
                                <tr>
                                    <th data-toggle="true">
                                    Mes
                                    </th>
                                    <th>Año</th>
                                    <th>Alquiler Bs</th>
                                    <th data-hide="phone">Alquiler Dolar</th>
                                    <th data-hide="all">
                                            Opciones
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php #foreach($this->mensualidad as $datos){?> 
                            <input type="hidden" name="id_mes" value="<?php #echo $datos["id_mes"]?>">
                                 <tr>
                                    <td>
                                        <?php #echo $datos["mes"]?>
                                        Enero
                                    </td>
                                    <td>
                                        <?php #echo $datos["anio"]?>
                                        2020
                                    </td>
                                    <td>
                                        <span class="text-danger">
                                            100.000,00 Bs
                                        <?php #echo number_format($datos["mensualidad"], 2, ",", ".");?> Bs
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            1.33 $
                                            <?php #echo $datos["mensualidad_dolar"]?> $
                                        </span>
                                    </td>
                                    <td>  
                                        <button class="btn btn-success waves-effect waves-light m-r-10 NO-DISPONIBLE" type="button" data-placement="bottom" data-target="#actualizar" data-toggle="modal" >
                                            Editar  
                                            </button>
                                            
                                           
                                           
                                        <a class="btn btn-danger waves-effect waves-light" type="button" href="javascript::void(0)">Eliminar 
                                             
                                            
                                    </td> 
                                </tr>

                                <tr>
                                    <td>
                                        <?php #echo $datos["mes"]?>
                                        Febrero
                                    </td>
                                    <td>
                                        <?php #echo $datos["anio"]?>
                                        2020
                                    </td>
                                    <td>
                                        <span class="text-danger">
                                            242.000,00 Bs
                                        <?php #echo number_format($datos["mensualidad"], 2, ",", ".");?> Bs
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            2.33 $
                                            <?php #echo $datos["mensualidad_dolar"]?> $
                                        </span>
                                    </td>
                                    <td>  
                                        <button class="btn btn-success waves-effect waves-light m-r-10 NO-DISPONIBLE" type="button" data-placement="bottom" data-target="#actualizar" data-toggle="modal" >
                                            Editar  
                                            </button>
                                            
                                           
                                           
                                        <a class="btn btn-danger waves-effect waves-light" type="button" href="javascript::void(0)">Eliminar 
                                             
                                            
                                    </td> 
                                </tr>
                            <?php #} ?>  
                            </tbody>
                        </table>
                    </div>         
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
