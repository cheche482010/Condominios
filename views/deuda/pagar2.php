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
                    <?php $dato= explode("/", BASE_URL); ?> 
                        <form action="<?php echo constant('URL'); ?>deuda/Pagando_Deudas/<?php echo$dato[8]; ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                            
                        <h2 class="card-title text-center text-themecolor">
                            Pago de  Deudas
                        </h2>

                        <div class="col-12 ">
                                    <label for="apartamento">
                                        Pago en Bolivares
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i aria-hidden="true" class="fa fa-money">
                                                </i>
                                        </div>
                                        <input class="form-control input-number" id="pago_abono" name="pago_abono" placeholder="Pago" type="text">
                                        </input>
                                    </div>
                                </div>

                        <div class="col-12 m-t-20">

                            <label for="mes">
                                    Meses en Deuda
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
foreach ($this->deuda as $deudas) 
{
    $ids_dolar = explode("/", $deudas["ids_dolar"]);

    if ($deudas["id_apartamento"] == $dato[8]) 
    {
        foreach ($ids_dolar as $key => $dolar) 
        {
           foreach ($this->mensualidad as $mensualidades) 
           {
                
                if ($dolar == $mensualidades["id_mes"]) 
                {
                    $meses [] = $mensualidades["mes"];

                    $deuda_dolar[] = $mensualidades["mensualidad_dolar"];

                    foreach ($this->diario as $dia) 
                    {
                        if ($dia["dia"] == date('d')) 
                        {
                            $precio_hoy = $dia["dolar"];
                        }else
                        {
                            $precio_ayer = $dia["dolar"];
                        }                        
                    }
                }
           }
        }

        foreach ($deuda_dolar as $key => $dolares)
        {
            $total_bolivar_hoy  []  = $precio_hoy * $dolares ;
            $total_bolivar_ayer []  = $precio_ayer * $dolares ;
        }

        // -----------------------------------------------------
        
        $imprimir = array(
            $meses,
            $total_bolivar_hoy,
            $total_bolivar_ayer,
            $deuda_dolar,
            $ids_dolar
        );  

    }
} 
?>
<?php 
foreach ($this->deuda as $deudas) 
{
    

    if ($deudas["id_apartamento"] == $dato[8]) 
    {
        
for ($i=0; $i < count($ids_dolar); $i++) {  ?>
                            <tr>
                                    <td>

                                        <input class="deuda" type="checkbox" name="pagos[]" value="<?php echo  $imprimir[4][$i]?>">
                                        <input type="hidden" name="id_deuda" value="<?php echo $deudas["id_deuda"] ?>">
                                        
                                    </td>
                                    
                                    <td>
                                       <?php echo  $imprimir[0][$i]?>
                                      
                                    </td>
                                    <td>
                                        <?php 
                                        if (date('d')) 
                                        {
                                            echo  $imprimir[1][$i];
                                        }else
                                        {
                                            echo  $imprimir[2][$i];
                                        }                                        
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo  $imprimir[3][$i]?>
                                    </td>                                   
                            </tr>

<?php }}} ?>
                                </tbody>
                            </table>

                        </div>
                       <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <input type="submit" name="pagar" value="Pagar" class="btn btn-success">

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
<?php include_once modal."modal-deuda.php"; ?>