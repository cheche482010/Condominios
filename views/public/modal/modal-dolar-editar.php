<!-- Modal -->
<?php $id= $datos["id_mes"]; ?>

<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Actualizar Precio  
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo constant('URL'); ?>dolar/dolarEditar/<?php echo $datos["id_mes"]; ?>" enctype="multipart/form-data" id="formulario" method="POST" name="formulario">
                    <div class="form-group">
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label class="col-form-label" for="precio">
                                    Valor del Dolar
                                </label>
                                <div class="input-group">

                                <?php  if ($datos["id_mes"]) { ?>
                                    <div class="input-group-addon ">
                                        <i aria-hidden="true" class="fa fa-money">
                                        </i>
                                    </div>
                                    <input class="form-control input-number" id="precio" name="precio" placeholder="Bolivares" type="text" value="<?php echo $datos["precio"]?>">
                                    </input>
                                <?php  }; ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cancelar
                </button>
                <input class="btn btn-primary" type="submit" value="Actualizar" id="Actualizar">
            </div>
            </form>
        </div>
    </div>
</div>