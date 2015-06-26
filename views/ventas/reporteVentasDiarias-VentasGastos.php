<?php 
    $c = 0; 
    $total_venta=0; $total_meta=0; $total_venta_vs_meta=0; $total_gasto_anio_anterior=0; $total_gasto_actual=0; 
    $total_ptje_crecimiento_meta=0; $total_ptje_crecimiento_gasto_anio_anterior=0;
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
                        <th colspan="3" class="text-center"> </th>
                        <th colspan="1" class="text-center">Venta</th>                        
                        <th colspan="3" class="text-center">Meta</th>
                        <th colspan="3" class="text-center">Gastos</th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Zona</th>
                        <th>Venta</th>
                        <th>Meta</th>
                        <th>Vta vs meta</th>
                        <th>%Crec</th>
                        <th>Gtos históricos</th>
                        <th>Gtos actuales</th>
                        <th>%Crec</th>
                    </tr>
                </thead>
                
                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 

                        //$total_venta=0; $total_meta=0; $total_venta_vs_meta=0; $total_gasto_anio_anterior=0; $total_gasto_actual=0; 
                        //$total_ptje_crecimiento_meta=0; $total_ptje_crecimiento_gasto_anio_anterior=0;

                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_meta = $total_meta + $registro["META"];
                        $total_venta_vs_meta = $total_venta_vs_meta + $registro["VENTA_VS_META"];
                        $total_gasto_anio_anterior = $total_gasto_anio_anterior + $registro[utf8_decode("GASTO_AÑO_ANTERIOR")];
                        $total_gasto_actual = $total_gasto_actual + $registro[utf8_decode("GASTO_ACTUAL")];                        

                        //Estos dos ya los regresa el stored calculados como totales.
                        $total_ptje_crecimiento_meta = $registro["PTJE_CRECIMIENTO_META_TOTAL"];
                        $total_ptje_crecimiento_gasto_anio_anterior = $registro[utf8_decode("PTJE_CRECIMIENTO_GASTO_AÑO_ANTERIOR_TOTAL")];
                    ?>
                    <tr>
                        <td></td>
                        <td> <?php echo $registro["COD_ZONA"]; ?></td>
                        <td> <?php echo $registro["NOM_ZONA"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["VENTA_VS_META"])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro["VENTA_VS_META"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["PTJE_CRECIMIENTO_META"])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro["PTJE_CRECIMIENTO_META"],2); ?>%</td>                       
                        <td style="text-align:right"> <?php echo "$" . number_format($registro[utf8_decode("GASTO_AÑO_ANTERIOR")],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro[utf8_decode("GASTO_ACTUAL")],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro[utf8_decode("PTJE_CRECIMIENTO_GASTO")])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro[utf8_decode("PTJE_CRECIMIENTO_GASTO")],2); ?>%</td>
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
                <th>Código</th>
                <th>Zona</th>
                <th>Venta</th>
                <th>Meta</th>
                <th>Vta vs meta</th>
                <th>%Crec</th>
                <th>Gtos históricos</th>
                <th>Gtos actuales</th>
                <th>%Crec</th>
            </tr>
        </thead>
        <tbody>
            <td></td>
            <td></td>
            <td style="font-weight:bold ;">Totales</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,0); ?></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_venta_vs_meta)<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($total_venta_vs_meta,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_crecimiento_meta)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_crecimiento_meta,2); ?>%</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_gasto_anio_anterior,0); ?></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_gasto_actual,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_ptje_crecimiento_gasto_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_ptje_crecimiento_gasto_anio_anterior,2); ?>%</td>
        </tbody>
    </table>                    
</div>                    