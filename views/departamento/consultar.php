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
                        Consultas
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
                                <h4 class="card-title">
                                Consultar Apartamentos 
                                </h4>

                                <label class="form-inline">Monstrar
                                    <select id="demo-show-entries" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                    </select> Filas </label>
                                <table id="demo-foo-pagination" class="table m-b-0 toggle-arrow-tiny color-table info-table" data-page-size="10">
                                    <thead>
                                        <tr>
                                            <th data-toggle="true"> Apartamento </th>
                                            <th>Lugar </th>
                                            <th data-hide="phone">
                                            Estado
                                            </th>
                                            <th data-hide="all">
                                            Opciones
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php #foreach($this->departamento as $datos){?> 
                                        <tr>
                                            <td>
                                                <?php #echo $datos["nombre"]?>
                                                B3
                                             </td>
                                            <td>
                                                <?php #echo $datos["ubicacion"]?>
                                               Calle 16
                                            </td>
                                            <td>
                                            <span class="label label-success label-rouded">
                                                    Ocupado
                                                </span>
                                           <?php #
                                           #if ($datos["estado"]=== "Ocupado") 
                                           #{
                                              #echo 
                                                '
                                                <span class="label label-success label-rouded">
                                                    Ocupado
                                                </span>
                                                ';
                                           #}
                                           #else
                                           #{
                                                #echo 
                                                '
                                                <span class="label label-info label-rouded">
                                                    Disponible
                                                </span>
                                                ';
                                           #}
                                           
                                           ?> 
                                        </td>
                                            <td>  

                                        <a class="btn btn-success waves-effect waves-light" type="button" href="<?php #echo constant('URL'); ?>departamento/actualizar/<?php #echo $datos["id_apartamento"]; ?>">Editar </a>

                                        <a class="btn btn-danger waves-effect waves-light" type="button" href="<?php #echo constant('URL'); ?>departamento/Eliminar/<?php #echo $datos["id_apartamento"]; ?>">Eliminar </a>
                                             
                                            
                                    </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                
                                                B4
                                             </td>
                                            <td>
                                                
                                                Calle 17
                                            </td>
                                            <td>
                                            <span class="label label-info label-rouded">
                                                    Disponible
                                                </span>
                                           
                                           
                                        </td>
                                            <td>  

                                        <a class="btn btn-success waves-effect waves-light" type="button" href="<?php #echo constant('URL'); ?>departamento/actualizar/<?php #echo $datos["id_apartamento"]; ?>">Editar </a>

                                        <a class="btn btn-danger waves-effect waves-light" type="button" href="<?php #echo constant('URL'); ?>departamento/Eliminar/<?php #echo $datos["id_apartamento"]; ?>">Eliminar </a>
                                             
                                            
                                    </td>
                                        </tr>
                                    <?php #} ?>            
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5">
                                                <div class="text-right">
                                                    <ul class="pagination pagination-split m-t-30"> </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
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
