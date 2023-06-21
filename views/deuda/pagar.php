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
                                <h1 class="text-themecolor m-b-0 m-t-0" id="datos">1.430.089,00</h1>
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

                        <div class="col-12 m-t-20">
                            <label for="mes">
                                        Deudas
                                    </label>
                               
                            <table class="table table-hover color-table info-table">
                                <thead>
                                <tr>
                                    <th>Pagar</th>
                                    <th>Mes</th>
                                    <th>Deuda Precio Actual</th>
                                    <th>Deuda $</th>
                                </tr>
                                </thead>
                                <tbody id="example">
<?php 
// for ($i=0; $i <count($ids_dolar) ; $i++) { 

    
     
 
//     foreach ($mensualidad as $mensualidades) {

//         $deuda_dolar = $mensualidades["mensualidad_dolar"];
        

//         if ($mensualidades["id_mes"] == $ids_dolar[$i]) {
//             $total_dolar[] = $mensualidades["mensualidad_dolar"];
//             foreach ($diario as $dia) {
//                 $precio_dia = $dia["dolar"];
//                 if ($dia["dia"] == date('d')) {
//                     $precio_dia = $dia["dolar"];
//                 }else{
//                     $precio_ayer = $dia["dolar"];

//                 }
                
//             }
//             if (date('d')) {
//                 $total = $precio_dia * $deuda_dolar;
//             }
//             else{
//                 $total = $precio_ayer * $deuda_dolar;
//             }
//             $meses []= $mensualidades["mes"];
//         }
//     } 
// $total = number_format($total, 2, ",", ".");

 ?>
                                <tr>
                                    <td>
                                        <input class="deuda" type="checkbox" name="pagos[]" value="">
                                    </td>
                                    <td>
                                        enero
                                       <?php #echo $meses [$i]; ?> 
                                    </td>
                                    <td>
                                        2.857.309,00 bs
                                        <?php #echo $total; ?>
                                    </td>
                                    <td>
                                        2.72 $
                                        <?php #echo $total_dolar[$i]; ?>
                                    </td>
                                </tr>
<?php #} ?>
                                </tbody>
                            </table>

                        </div>
                       <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <input type="button" name="asignar" value="Pagar" class="btn btn-success">

                                            <button class="btn btn-primary" type="button" id="selectAll">
                                                Marcar Todos
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
