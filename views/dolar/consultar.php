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
        <div class="row">
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
                                <h1 class="text-themecolor m-b-0 m-t-0" id="datos">1.530.036,12</h1>
                                <!-- <div id="texto">
                                    
                                </div> -->
                                <button class="btn" style="border: none;background: none;color: gray;" type="button">
                                    <i aria-hidden="true" class="fa fa-refresh fa-2x" data-placement="bottom" data-target="#actualizar" data-toggle="modal" title="Actualizar Precio">
                                    </i>
                                </button>
                            <?php include modal."modal-dolar-registrar.php"; ?>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

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
                        Consultas
                    </li>
                </ol>
            </div>
        </div> 
        <!-- ============================================================== -->
        <!-- FIN CABECERA -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- COMIENZA EL CONTENIDO DE LA PAGINA -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg">
                <div class="card">
                    <div class="card-block">
                        <div class="card-block">
                            <h4 class="card-title">
                                Valor del Dolar por Mes
                            </h4>
                            <h6 class="card-subtitle">
                                Puede Eliminar o Editar dando seleccionando el precio
                            </h6>
                            <table class="table m-b-0 toggle-arrow-tiny color-table info-table" id="demo-foo-accordion">
                                <thead>
                                    <tr>
                                        <th data-toggle="true">
                                            Valor
                                        </th>
                                        <th>
                                            Mes
                                        </th>
                                        <th data-hide="phone">
                                            Año
                                        </th>
                                        <th data-hide="all">
                                            Opciones
                                        </th>
                                    </tr>
                                </thead>
                                <tbody> 

                                <?php #foreach($this->dolar as $datos){ ?> 
                                    <tr>
                                        <td>
                                            <?php #echo number_format($datos["precio"], 2, ",", ".")." Bs";?> 
                                            75.015,14 Bs
                                        </td>
                                        <td>
                                            <?php #echo $datos["mes"]?> 
                                            Enero
                                        </td>
                                        <td>
                                            <?php #echo $datos["anio"]?> 
                                            2020
                                        </td>

                                        <td>  
                                           <button class="btn btn-success waves-effect waves-light m-r-10 NO-DISPONIBLE" type="button" data-placement="bottom" data-target="#actualizar" data-toggle="modal" >
                                            Editar  
                                            </button>
                                            
                                           
                                           
                                             <a class="btn btn-danger waves-effect waves-light" type="button" href="<?php echo constant('URL'); ?>dolar/dolarEliminar/<?php echo $datos["id_mes"]; ?>">Eliminar 
                                             
                                            
                                        </td> 
                                         
                                    </tr>

                                    <tr>
                                        <td>
                                            <?php #echo number_format($datos["precio"], 2, ",", ".")." Bs";?> 
                                            74.015,14 Bs
                                        </td>
                                        <td>
                                            <?php #echo $datos["mes"]?> 
                                            Febrero
                                        </td>
                                        <td>
                                            <?php #echo $datos["anio"]?> 
                                            2020
                                        </td>

                                        <td>  
                                           <button class="btn btn-success waves-effect waves-light m-r-10 NO-DISPONIBLE" type="button" data-placement="bottom" data-target="#actualizar" data-toggle="modal" >
                                            Editar  
                                            </button>
                                            
                                           
                                           
                                             <a class="btn btn-danger waves-effect waves-light" type="button" href="<?php echo constant('URL'); ?>dolar/dolarEliminar/<?php echo $datos["id_mes"]; ?>">Eliminar 
                                             
                                            
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
<?php  #include_once (modal."modal-dolar-editar.php"); ?> 