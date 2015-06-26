<?php 
    $c = 0; 
    $total_venta=0; $total_meta=0; $total_venta_vs_meta=0; $total_venta_anio_anterior=0; $total_venta_vs_venta_anio_anterior=0; 
    $total_ptje_crecimiento_meta=0; $total_ptje_crecimiento_anio_anterior=0;
?>

<!--<?php echo "<pre>" ; print_r($rs) ; echo "</pre>" ?>-->

<div class="row">
    <div class="col-lg-12">

        <!--<pre><?php print_r($parametros) ?></pre> -->

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p><?php echo (!empty($parametros["codigoGrupo"])) ? "Grupo: " . $parametros["codigoGrupo"] . " " . $parametros["nomGrupo"] : '' ;  ?> </p>
        <p><?php echo (!empty($parametros["codigoZona"])) ? "Zona: " . $parametros["codigoZona"] . " " . $parametros["nomZona"] : '' ;  ?> </p>

        <p><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </p>          

        <?php /*
        <?php $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['ventas/autoriza']]); ?>
        <section>
            <label class="label">Importe</label>
            <input id="txtImporte" name="parametros[importe]"></input>
            <?= Html::submitButton('Autorizar', ['class' => 'btn btn-danger','id' => 'verImporte', 'name' => 'btnAutorizar']); ?>
        </section>
        <?php ActiveForm::end(); ?>
        */ ?>


        <button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button>
    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <!-- <table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th colspan="3" class="text-center"> </th>
                        <th colspan="1" class="text-center">Venta total</th>                        
                        <th colspan="3" class="text-center">Meta total</th>
                        <th colspan="3" class="text-center">Histórico año anterior</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Grupo</th>
                        <th>Venta</th>
                        <th>Meta</th>
                        <th>Vta vs meta</th>
                        <th>%Crec</th>
                        <th>Vta año anterior</th>
                        <th>Vta vs vta año anterior</th>
                        <th>%Crec</th>
                    </tr>
                </thead>

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 

                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_meta = $total_meta + $registro["META"];
                        $total_venta_vs_meta = $total_venta_vs_meta + $registro["VENTA_VS_META"];
                        $total_venta_anio_anterior = $total_venta_anio_anterior + $registro[utf8_decode("VENTA_AÑO_ANTERIOR")];
                        $total_venta_vs_venta_anio_anterior = $total_venta_vs_venta_anio_anterior + $registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")];

                        //Estos dos ya los regresa el stored calculados como totales.
                        $total_ptje_crecimiento_meta = $registro["PTJE_CRECIMIENTO_META_TOTAL"];
                        $total_ptje_crecimiento_anio_anterior = $registro[utf8_decode("PTJE_CRECIMIENTO_AÑO_ANTERIOR_TOTAL")];
                    ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["COD_GRUPO"]; ?></td>
                        <td> <?php echo $registro["NOM_GRUPO"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["VENTA_VS_META"])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro["VENTA_VS_META"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["PTJE_CRECIMIENTO_META"])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro["PTJE_CRECIMIENTO_META"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_AÑO_ANTERIOR")],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")],0); ?></td>                        
                        <td style="text-align:right ; color:<?php echo($registro[utf8_decode("PTJE_CRECIMIENTO_AÑO_ANTERIOR")])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro[utf8_decode("PTJE_CRECIMIENTO_AÑO_ANTERIOR")],2); ?>%</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
           
        </section>
    </div>
</div>

<div>
    <table class="table table-bordered table-striped tabla2  display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Venta</th>
                <th>Meta</th>
                <th>Vta vs meta</th>
                <th>%Crec</th>
                <th>Vta año anterior</th>
                <th>Vta vs vta año anterior</th>
                <th>%Crec</th>
            </tr>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td style="font-weight:bold">Totales</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,0); ?></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_venta_vs_meta)<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($total_venta_vs_meta,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_crecimiento_meta)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_crecimiento_meta,2); ?>%</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta_anio_anterior,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_venta_vs_venta_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($total_venta_vs_venta_anio_anterior,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_crecimiento_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_crecimiento_anio_anterior,2); ?>%</td>            
        </tbody>
    </table>                    
</div>                    