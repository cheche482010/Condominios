
<!-- Modal -->
<div aria-hidden="true" aria-labelledby="exampleModalCenterTitle" class="modal fade" id="deuda" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    Deudas Mensuales 
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body"> 
                <div class="card">
                            <div class="card-block">
                                <h5 class="card-title">
                                Seleccione los meses en deuda 
                                </h5>                               
                            </div>
                </div>

                <div class="table-responsive">
                        <table class="table table-hover color-table info-table">
                            <thead>
                                <tr>
                                    <th>Deuda</th>
                                    <th>Mes</th>
                                    <th>Deuda Bs</th>
                                    <th>Deuda Dolar</th>
                                </tr>
                            </thead>
                            <tbody id="example">
                            <?php 
                                foreach($this->deuda as $deudas){
                                    if($deudas["id_apartamento"]){
                            ?>
                            <?php 
                                        $ids_dolar= explode("/", $deudas["ids_dolar"]);

                                        foreach($this->mensualidad as $mensualidades){
                                            for ($i=0; $i <count($ids_dolar) ; $i++) { 
                                                if ($ids_dolar[$i] == $mensualidades["id_mes"]) {
                                    ?> 
                            
                                 <tr>
                                    <td>
                                        <input class="deuda" type="checkbox" name="deuda[]" value="">
                                    </td>
                                    
                                    <td>
                                        <?php echo $mensualidades["mes"]; ?>
                                    </td>
                                    
                                    <td>
                                        <span class="text-danger">
                                            <?php 
                                            foreach($this->diario as $dia){
                                            $total = $dia["dolar"] * $mensualidades["mensualidad_dolar"];
                                            echo number_format($total, 2, ",", ".");
                                            }?> Bs
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-success">
                                            <?php echo number_format($mensualidades["mensualidad_dolar"], 2, ",", ".")?> $
                                        </span>
                                    </td>
                                </tr>
                                <?php }}} ?>
                            <?php }} ?>  
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="5">
                                        <div class="text-center">
                                            

                                            <button class="btn btn-primary" type="button" id="selectAll">
                                                Marcar Todos
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                </div>
            </div>  
            <div class="modal-footer">
                <button class="btn btn-success" data-dismiss="modal" type="button">
                    Listo
                </button>
            </div>
        </div>
    </div>
</div>