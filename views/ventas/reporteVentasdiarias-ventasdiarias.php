<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MENUUSUARIOS */
/* @var $form yii\widgets\ActiveForm */
?>





<?php 
    $c = 0; 
    $total_venta=0; $total_meta_diaria=0; $total_venta_vs_meta_diaria=0; $total_venta_anio_anterior=0; $total_venta_vs_venta_anio_anterior=0; 
    $total_crecimiento_meta_diaria=0; $total_crecimiento_diario_anio_anterior=0;
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


        <?php /* $form = ActiveForm::begin(['id' => 'my-form', 'options'=>['class'=>'smart-form'], 'action'=>['ventas/autoriza']]); ?>
        <section>
            <label class="label">Importe</label>
            <input id="txtImporte" name="parametros[importe]"></input>
            <?= Html::submitButton('Autorizar', ['class' => 'btn btn-danger','id' => 'verImporte', 'name' => 'btnAutorizar']); ?>
        </section>
        <?php ActiveForm::end();*/ ?>

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
                        <th colspan="1" class="text-center"> </th>
                        <th colspan="3" class="text-center">Venta</th>                        
                        <th colspan="3" class="text-center">Meta</th>
                        <th colspan="3" class="text-center">Histórico año anterior</th>
                        <th colspan="1"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th>Dia</th>
                        <th>Venta</th>
                        <th>Venta acumulada</th>
                        <th>Meta diaria</th>
                        <th>Vta vs meta diaria</th>
                        <th>%Crec</th>
                        <th>Vta año anterior</th>
                        <th>Vta vs vta año anterior</th>
                        <th>%Crec</th>
                        <th>Dia laborable</th>
                    </tr>
                </thead>
                

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 

                        //$total_venta=0; $total_meta_diaria=0; $total_venta_vs_meta_diaria=0; $total_venta_anio_anterior=0; $total_venta_vs_venta_anio_anterior=0; 
                        //$total_crecimiento_meta_diaria=0; $total_crecimiento_diario_anio_anterior=0;

                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_meta_diaria = $total_meta_diaria + $registro["META_DIARIA"];
                        $total_venta_vs_meta_diaria = $total_venta_vs_meta_diaria + $registro["VENTA_VS_META_DIARIA"];
                        $total_venta_anio_anterior = $total_venta_anio_anterior + $registro[utf8_decode("VENTA_AÑO_ANTERIOR")];
                        $total_venta_vs_venta_anio_anterior = $total_venta_vs_venta_anio_anterior + $registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")];                        

                        //Estos dos ya los regresa el stored calculados como totales.
                        $total_crecimiento_meta_diaria = $registro["PTJE_CRECIMIENTO_PROMEDIO_VENTA_DIARIA"];
                        $total_crecimiento_diario_anio_anterior = $registro[utf8_decode("PTJE_CRECIMIENTO_PROMEDIO_AÑO_ANTERIOR")];
                    ?>
                    <tr>
                        <td></td>
                        <td style="text-align:right"> <?php echo date('d',strtotime($registro["DIA"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($registro["DIA"]))]) . '-' . date('y',strtotime($registro["DIA"])); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA_ACUMULADA"],0); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["META_DIARIA"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["VENTA_VS_META_DIARIA"])               <0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro["VENTA_VS_META_DIARIA"],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro["PTJE_CRECIMIENTO_DIARIO_META_DIARIA"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_AÑO_ANTERIOR")],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_VS_VENTA_AÑO_ANTERIOR")],0); ?></td>
                        <td style="text-align:right ; color:<?php echo($registro[utf8_decode("PTJE_CRECIMIENTO_DIARIO_AÑO_ANTERIOR")])<0 ? 'red' : 'blue' ?>"> <?php echo number_format($registro[utf8_decode("PTJE_CRECIMIENTO_DIARIO_AÑO_ANTERIOR")],2); ?>%</td>
                        <td style="text-align:right"> <?php echo $registro["ES_DIA_LABORABLE_R1"]; ?></td>
                    </tr>
                    <?php } ?>
                    
                   
                </tbody>

            </table>
        </section>
    </div>
</div>

<!--TOTALES-->
<div>
    <table class="table table-bordered table-striped tabla2 display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Venta</th>
                <th></th><!-- que no diga venta acumulada-->
                <th>Meta diaria</th>
                <th>Vta vs meta diaria</th>
                <th>%Crec</th>
                <th>Vta año anterior</th>
                <th>Vta vs vta año anterior</th>
                <th>%Crec</th>
            </tr>
        </thead> 
        <tbody>
        <tr>
            <td></td>
            <td style="font-weight:bold">Totales</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,0); ?></td>
            <td style="font-weight:bold"></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_meta_diaria,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_venta_vs_meta_diaria)<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($total_venta_vs_meta_diaria,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_crecimiento_meta_diaria)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_crecimiento_meta_diaria,0); ?>%</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta_anio_anterior,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_venta_vs_venta_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($total_venta_vs_venta_anio_anterior,0); ?></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_crecimiento_diario_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_crecimiento_diario_anio_anterior,2); ?>%</td>
        </tr> 
        <tr>
            <td></td>
            <td></td>
            <td style="font-weight:bold">Vta diaria promedio</td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($registro["VENTA_DIARIA_PROMEDIO"],2); ?> </td>
            <td style="font-weight:bold">Meta diaria promedio</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($registro["META_DIARIA_PROMEDIO"],2); ?> </td>
            <td style="font-weight:bold">Venta año anterior prom</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_AÑO_ANTERIOR_PROMEDIO")],2); ?> </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-weight:bold">Vta vs meta diaria promedio</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($registro["VENTA_DIARIA_PROMEDIO_VS_META_DIARIA_PROMEDIO"])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro["VENTA_DIARIA_PROMEDIO_VS_META_DIARIA_PROMEDIO"],2); ?></td>
            <td style="font-weight:bold">Vta vs vta año anterior prom</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($registro[utf8_decode("VENTA_DIARIA_PROMEDIO_VS_VENTA_AÑO_ANTERIOR_PROMEDIO")])<0 ? 'red' : 'blue' ?>"> <?php echo "$" . number_format($registro[utf8_decode("VENTA_DIARIA_PROMEDIO_VS_VENTA_AÑO_ANTERIOR_PROMEDIO")],2); ?></td>            
        </tr>  
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="font-weight:bold">Crecimiento prom</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_crecimiento_meta_diaria)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_crecimiento_meta_diaria,2); ?>%</td>
            <td style="font-weight:bold">Crecimiento prom</td>
            <td></td>
            <td style="font-weight:bold ; text-align:right ; color:<?php echo($total_crecimiento_diario_anio_anterior)<0 ? 'red' : 'blue' ?>"> <?php echo number_format($total_crecimiento_diario_anio_anterior,2); ?>%</td>
        </tr>              
        </tbody>               
    </table>
</div>

