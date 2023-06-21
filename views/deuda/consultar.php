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
                                <h1 class="text-themecolor m-b-0 m-t-0" id="datos">1.530.016,00</h1>
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
                                            Apartamento
                                        </th>
                                        <th>
                                            Lugar
                                        </th>
                                        <th data-toggle="true">
                                            Deuda BS
                                        </th>
                                        <th data-toggle="all">
                                            Deuda $ 
                                        </th>
                                        <th data-toggle="all">
                                            Pagar 
                                        </th>        
                                        <th data-hide="all">
                                            Total
                                        </th>
                                    </tr>
                            </thead>
                            <tbody>                           
                            <?php #foreach($this->departamento as $datos){   ?>
                                    <tr>
                                    <td>G4</td>
                                    <td> CALLE 16</td> 
                                    <td>
                                        <span class="text-danger"> 
                                            1.850.306,00 BS
                                        </span>
                                    </td>  
                                    <td>
                                       <span class="text-success">
                                        1.3 $
                                       </span> 
                                    </td>
                                    <td>
                                        <a class="btn btn-success waves-effect waves-light" type="button" href="#">Pagar </a>
                                    </td>

                                    <tr>
                                        <td>G5</td>
                                    <td> CALLE 17</td> 
                                    <td>
                                        <span class="text-danger"> 
                                            2.950.406,00 BS
                                        </span>
                                    </td>  
                                    <td>
                                       <span class="text-success">
                                        2.45 $
                                       </span> 
                                    </td>
                                    <td>
                                        <a class="btn btn-success waves-effect waves-light" type="button" href="#">Pagar </a>
                                    </td>
                                    </tr>
                                        <!-- <td>
                                           <?php #echo $datos["nombre"]?>
                                        </td>
                                        <td>
                                           <?php #echo $datos["ubicacion"]?> 
                                        </td>
                                <?php #
                                    #foreach($this->deuda as $deudas){
                                        #if($deudas["id_apartamento"] == $datos["id_apartamento"]){
                                ?> 
                                        <td>
                                            <span class="text-danger"> 
                                            <?php #
                                            #foreach($this->diario as $dia){
                                            #$total = $deudas["total_dolar"] * $dia["dolar"];
                                            
                                            #} 
                                            #echo number_format($total, 2, ",", ".");
                                            ?>
                                             Bs
                                            </span>
                                        </td>                                            
                                        <td>
                                            <span class="text-success">
                                            <?php #echo number_format($deudas["total_dolar"], 2, ",", ".")?> $
                                            </span>
                                        </td>
                                    
                                        <td>
                                            <a class="btn btn-success waves-effect waves-light" type="button" href="X/<?php #echo $datos["id_apartamento"]; ?>">Pagar </a>
                                        </td>
                                        <td>
                                            <table class="table-striped" data-height="250" data-mobile-responsive="true" data-toggle="table">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Mes
                                                        </th>                                                 
                                                        <th>
                                                            Bolivares
                                                        </th>
                                                        <th>
                                                            Dolares
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            <?php #if($deudas["id_apartamento"] == $datos["id_apartamento"]){ ?> 
                                                         
                                                    <tr class="tr-class-1" id="tr-id-1"> 
                                                <?php #
                                                    #$ids_dolar= explode("/", $deudas["ids_dolar"]);

                                                    #foreach($this->mensualidad as $mensualidades)
                                                    #{
                                                        #for ($i=0; $i <count($ids_dolar) ; $i++) 
                                                        #{ 
                                                            #if ($ids_dolar[$i] == $mensualidades["id_mes"]) 
                                                            #{
                                                ?>                                                     
                                                        <td>
                                                            <?php #echo $mensualidades["mes"]; ?>
                                                        </td>
                                                        <td>
                                                            <span class="text-danger">
                                                            <?php #echo $mensualidades["mensualidad"]; ?> Bs
                                                            </span>
                                                        </td>
                                                        <td>
                                                            <span class="text-success">
                                                            <?php #echo $mensualidades["mensualidad_dolar"]; ?> $
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php #}}} ?>
                                                
                                            <?php #} ?>   
                                                </tbody>
                                            </table>                                            
                                <?php #}} ?> 
                                        </td> -->
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
