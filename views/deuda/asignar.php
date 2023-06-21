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
                        Asignar
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
                        <form action="<?php echo constant('URL'); ?>deuda/AsignarDeuda" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                        <h2 class="card-title text-center text-themecolor">
                            Asiganr Deudas
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
                                        <?php #foreach($this->departamento as $datos){?>
                                            <option value="<?php #echo $datos["id_apartamento"]?>">
                                                <?php #echo $datos["nombre"]?>
                                                G1
                                            </option>
                                            
                                         <?php #} ?>     
                                        </select>
                                    </div>
                                </div> 
                        <div class="col-12 m-t-20">
                            <label class="card-title">
                                Seleccionas Meses en deuda
                            </label>
                        </div>
                       <div class="table-responsive">
                        <table class="table table-hover color-table info-table">
                            <thead>
                                <tr>
                                    <th>Deuda</th>
                                    <th>Mes</th>
                                    <th>Año</th>
                                    <th>Alquiler Bs</th>
                                    <th>Alquiler Dolar</th>
                                </tr>
                            </thead>
                            <tbody id="example">
                            <?php #foreach($this->mensualidad as $datos){?> 
                            
                                 <tr>
                                    <td>
                                        <input class="deuda" type="checkbox" name="deuda[]" value="<?php #
                                        #echo $datos["id_mes"];
                                        ?>">
                                    </td>
                                    <td>
                                        <?php #echo $datos["mes"]?>
                                        ENERO
                                    </td>
                                    <td>
                                        <?php #echo $datos["anio"]?>
                                        2020
                                    </td>
                                    <td>
                                        <span class="text-danger">
                                            2.343.222,00
                                        <?php #echo number_format($datos["mensualidad"], 2, ",", ".");?> Bs
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            2.31
                                            <?php #echo $datos["mensualidad_dolar"]?> $
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input class="deuda" type="checkbox" name="deuda[]" value="<?php #
                                        #echo $datos["id_mes"];
                                        ?>">
                                    </td>
                                    <td>
                                        <?php #echo $datos["mes"]?>
                                        FEBRERO
                                    </td>
                                    <td>
                                        <?php #echo $datos["anio"]?>
                                        2020
                                    </td>
                                    <td>
                                        <span class="text-danger">
                                            3.343.222,00
                                        <?php #echo number_format($datos["mensualidad"], 2, ",", ".");?> Bs
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            3.21
                                            <?php #echo $datos["mensualidad_dolar"]?> $
                                        </span>
                                    </td>
                                </tr>
                            <?php #} ?>  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-center">
                                            <input type="button" name="asignar" value="Asignar" class="btn btn-success">

                                            <button class="btn btn-primary" type="button" id="selectAll">
                                                Marcar Todos
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
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
