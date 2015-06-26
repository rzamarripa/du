<?php 
    $c = 0; 
    $total_meta_diaria=0; $total_meta_actual=0; $total_venta=0; $total_meta_ajustada=0; $total_ptje_crecimiento_meta_actual=0; $total_ptje_meta_ajustada_vs_meta_original=0;
?>
<!--<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>-->

<div class="row">
    <div class="col-lg-12">

        <!--<pre><?php print_r($parametros) ?></pre> -->

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p><?php echo (!empty($parametros["codigoZona"])) ? "Zona: " . $parametros["codigoZona"] . " " . $parametros["nomZona"] : '' ;  ?> </p>

        <p><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </p>  

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
                        <th colspan="5" class="text-center">Semana</th>                        
                        <th colspan="2" class="text-center">Avance</th>
                        <th colspan="3"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>#Semana</th>
                        <th>Fecha1</th>
                        <th>Fecha2</th>
                        <th>Meta</th>
                        <th>Meta</th>
                        <th>Venta</th>
                        <th>%Crec</th>
                        <th>Meta ajustada</th>
                    </tr>
                </thead>

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                        //$total_meta_diaria=0; $total_meta_actual=0; $total_venta=0; $total_meta_ajustada=0; $total_ptje_crecimiento_meta_actual=0; $total_ptje_meta_ajustada_vs_meta_original=0;
                        $total_meta_diaria = $total_meta_diaria + $registro["META_DIARIA"];
                        $total_meta_actual = $total_meta_actual + $registro["META_ACTUAL"];
                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_meta_ajustada = $total_meta_ajustada + $registro["META_AJUSTADA"];

                        //Estos dos ya los regresa el stored calculados como totales.
                        $total_ptje_crecimiento_meta_actual = $registro["TOTAL_PTJE_CRECIMIENTO_META_ACTUAL"];
                        $total_ptje_meta_ajustada_vs_meta_original = $registro["PTJE_META_AJUSTADA_VS_META_ORIGINAL"];
                    ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["ID_SEMANA"]; ?></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["FECHA1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["FECHA1"]))]) . '-' . date('y',strtotime($registro["FECHA1"])); ?></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["FECHA2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["FECHA2"]))]) . '-' . date('y',strtotime($registro["FECHA2"])); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_DIARIA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_ACTUAL"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_AJUSTADA"],0); ?></td>
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
                <th></th>
                <th>Meta</th>
                <th>Meta avance</th>
                <th>Venta</th>
                <th>%Crec</th>
                <th>Meta ajustada</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-weight:bold ;">Totales</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta_diaria,0); ?></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta_actual,0); ?></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_crecimiento_meta_actual)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_crecimiento_meta_actual,2); ?>%</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta_ajustada,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_meta_ajustada_vs_meta_original)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_meta_ajustada_vs_meta_original,2); ?>%</td>
        </tbody>
    </table>                    
</div>                    