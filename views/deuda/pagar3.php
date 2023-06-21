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
                                <h1 class="text-themecolor m-b-0 m-t-0" id="datos"></h1>
                                <div id="texto">
                                    
                                </div>
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
<?php 
foreach ($this->deuda as $deudas) 
{
$id_deuda[] = $deudas["id_deuda"];
$id_apartamento[] = $deudas["id_apartamento"];
$ids_dolar = explode("/", $deudas["ids_dolar"]);
}

?>     

                        <div class="col-12 m-t-10">
                                    <label for="mes">
                                        Apartamentos
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="mdi mdi-home-modern">
                                            </i>
                                        </div>
                                        <select class="custom-select" id="apartamento" name="" style="width: 100%!important;">
                                            <option selected=""> 
                                                Selecione...
                                            </option>
                                        <?php for ($i=0; $i <count($id_apartamento) ; $i++) { ?>                                  
                                            <option value="">
                                                <?php 

                                                foreach($this->departamento as $departamento){
                                                    if ($departamento["id_apartamento"] == $id_apartamento[$i]) {
                                                        echo $departamento["nombre"];
                                                        
                                                    }


                                                } 
                                                ?>
                                            </option>

                                        <?php  }?>    
                                        </select>
                                        
                                        <input type="hidden"  id="deuda" name="deuda" value="<?php  ?>">
                                          
                                    </div>
                        </div> 

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
                                <tbody id="mostrar">
                                <tr>
                                    
                                </tr>
                                </tbody>
                            </table>

                        </div>
<script type="text/javascript">
    $(document).ready(function() {
    $('#apartamento').on('change', function() {
        var deuda = $('#deuda').val()
        $.ajax({
            type: 'POST',
            url: 'Pagos',
            data: {
                'deuda': deuda
            }
        }).done(function(datos) {
            $('#mostrar').html(datos)

        }).fail(function() {
            alert("error")
        }) 
    })
})
</script> 
                       <div class="form-group text-center m-t-30">
                                <div class="col-xs-12">
                                    <button class="btn btn-success waves-effect waves-light m-r-10" type="button" id="pagar">
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
