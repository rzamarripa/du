<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Utilerias;

?>

<?php
    //echo '<pre>' ; print_r($parametros) ; echo '</pre>' ;
    //echo '<pre>' ; print_r($rs) ; echo '</pre>' ;
    //exit;

    //ESTE REPORTE TIENE DOS VENTAS Y DOS COSTOS POR CLIENTE, UNO ES FILTRADO PORQUE SOLO LOS FILTRA HASTA EL %UT FILTRADO, Y EL COMPLETO ES EL TOTAL DEL CLIENTE
    $total_costo_filtrado = 0; $total_venta_filtrada = 0; $total_utilidad = 0; $total_descuentos = 0; $total_recuperacion = 0;
    $total_costo_completo = 0; $total_venta_completo = 0;
    $total_porcentaje_utilidad = 0; $total_porcentaje_recuperacion = 0; $total_porcentaje_factor_riesgo = 0;
?>

<div class="row">
    <div class="col-lg-12">

        <?php $c = 0; ?>

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>
        <p><?php echo (strlen($parametros["fecha1"]) > 0 ) ? "Desde la fecha: " . $parametros["fecha1"] : "" ; ?> </p>
        <p><?php echo (strlen($parametros["fecha2"]) > 0 ) ? "Hasta la fecha: " . $parametros["fecha2"] : "" ; ?> </p>
        <p> <?php 
                //Si tiene registros que muestre los filtros utilizados
                echo (count($rs) > 0 ) ?  $rs[0]["FILTROS_TEXTO"] : '' ; 
            ?>
        </p>  

        <?php 
        
        //if("si"=="no"){ 
        if(!isset($parametros["verReporte"])){
            $parametros["verReporte"] = true;
            echo Html::a('Versión para Imprimir', ['ventas/ventasparacomisiones', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
        } 
        ?>
    </div>  
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Costo</th>
                        <th>Venta</th>
                        <th>Utilidad</th>
                        <th>Uti(%)</th>
                        <th>Descuentos</th>
                        <th>Recuperación</th>
                        <th>Recuperación(%)</th>
                        <th>Factor riesgo(%)</th>
                    </tr>
                </thead>               

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                        $total_costo_filtrado = $total_costo_filtrado + $registro["COSTO"];
                        $total_venta_filtrada = $total_venta_filtrada + $registro["VENTA"];
                        $total_costo_completo = $total_costo_completo + $registro["COSTO_TOTAL"];
                        $total_venta_completo = $total_venta_completo + $registro["VENTA_TOTAL"];                        
                        $total_utilidad = $total_utilidad + $registro["UTILIDAD"];
                        $total_descuentos = $total_descuentos + $registro["DESCUENTOS"];
                        $total_recuperacion = $total_recuperacion + $registro["RECUPERACION"];
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $registro["COD_CTE"]; ?></td>
                        <td><?php echo $registro["NOM_CTE"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["COSTO"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["P_UTI"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["DESCUENTOS"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["P_REC"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo number_format($registro["FACTOR_RIESGO"],2); ?>%</td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </div>
</div>

<?php
    if ($total_venta_filtrada>0){
        $total_porcentaje_utilidad = ($total_utilidad / $total_venta_filtrada) * 100 ;
    }
    if ($total_venta_completo>0){
        $total_porcentaje_recuperacion = (($total_recuperacion+$total_descuentos)/ $total_venta_completo) * 100 ;
    }
    if ($total_costo_completo>0){
        $total_porcentaje_factor_riesgo = (1-($total_recuperacion / $total_costo_completo))*100;
    }
?>

<!--TOTALES-->
<div>
    <table class="table table-bordered table-striped tabla2 display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Costo</th>
                <th>Venta</th>
                <th>Utilidad</th>
                <th>Uti(%)</th>
                <th>Descuentos</th>
                <th>Recuperación</th>
                <th>Recuperación(%)</th>
                <th>Factor riesgo(%)</th>
            </tr>
        </thead> 
        <tbody>
             <tr>
                <td></td>
                <td style="font-weight:bold">Totales</td>
                <td></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_costo_filtrado,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta_filtrada,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_utilidad,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo number_format($total_porcentaje_utilidad,2); ?>%</td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_descuentos,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_recuperacion,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo number_format($total_porcentaje_recuperacion,2); ?>%</td> 
                <td style="font-weight:bold ; text-align:right"> <?php echo number_format($total_porcentaje_factor_riesgo,2); ?>%</td>                
            </tr>            
        </tbody>               
    </table>
</div>
