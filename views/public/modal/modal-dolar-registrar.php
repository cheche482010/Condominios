<!-- Modal -->  
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="actualizar" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" id="contenido">
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
                <form action="" enctype="multipart/form-data" id="registro" method="POST" name="registro">
                    <div class="form-group">
                        
                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label class="col-form-label" for="precio">
                                    Valor del Dolar
                                </label>
                                <div class="input-group">
                                    <div class="input-group-addon ">
                                        <i aria-hidden="true" class="fa fa-money">
                                        </i>
                                    </div>
                                    <input class="form-control input-number" id="dolar" name="dolar" placeholder="Bolivares" type="text">
                                    </input>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

                <input class="btn btn-primary" type="button" value="Guardar" id="Guardar" data-dismiss="modal">

                <button class="btn btn-secondary" data-dismiss="modal" type="button">
                    Cancelar
                </button>
                
                
            </div>
        </div>
        
    </div>
</div>

