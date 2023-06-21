<select  class="selectpicker show-tick" multiple data-selected-text-format="values" data-width="100%" data-size="5" multiple data-actions-box="true" title="Mes en Deuda" data-header="Seleccionar Mes en Deuda" data-dropup-auto="false" >



</select> 

<?php for ($i=0; $i <count($ids_dolar) ; $i++) { ?>
<?php 
    foreach ($this->mensualidad as $mensualidades) {

        $deuda_dolar = $mensualidades["mensualidad_dolar"];

        if ($mensualidades["id_mes"] == $ids_dolar[$i]) {
            foreach ($this->diario as $dia) {
                $precio_dia = $dia["dolar"];
                if ($dia["dia"] == date('d')) {
                    $precio_dia = $dia["dolar"];
                }else{
                    $precio_ayer = $dia["dolar"];

                }
                
            }
            if (date('d')) {
                $total = $precio_dia * $deuda_dolar;
            }
            else{
                $total = $precio_ayer * $deuda_dolar;
            }
            $meses []= $mensualidades["mes"];
        }
    } 
?>
<option value="<?php #echo $datos["id_apartamento"]?>" data-subtext="<?php echo number_format($total, 2, ",", "."); ?>" >
    <?php echo $meses [$i]  ;?>
</option>
<?php  }?>