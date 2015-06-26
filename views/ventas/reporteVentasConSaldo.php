<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Utilerias;

?>

<?php
	//echo '<pre>' ; print_r($rs) ; echo '</pre>' ;
	//exit;
    $total_venta = 0; $total_saldo= 0; $total_saldo_vencido = 0;
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
            echo Html::a('Versión para Imprimir', ['ventas/ventasconsaldo', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
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
                        <th>Cliente</th>
                        <th>Venta</th>
                        <th>Saldo</th>
                        <th>Saldo vencido</th>
                        <th>Plazo</th>
                        <th>Plazo prom.</th>
                        <th>Director</th>
                        <th>Venta total acumulado(%)</th>
                    </tr>
                </thead>               

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                        $total_venta = $total_venta + $registro["VENTA"];
                        $total_saldo = $total_saldo + $registro["SALDO"];
                        $total_saldo_vencido = $total_saldo_vencido + $registro["SALDO_VENCIDO"];
                    ?>
                    <tr>
                        <td></td>
                        <td><?php echo $registro["NOM_CTE"]; ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO"],2); ?></td>
                        <td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO_VENCIDO"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["PLAZO"],0); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["DIAS"],0); ?></td>
                        <td> <?php echo $registro["NOM_DIRECTOR"]; ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["ACUMULADO_VENTAS"],2); ?>%</td>
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
                <th>Saldo</th>
                <th>Saldo vencido</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        </thead> 
        <tbody>
             <tr>
                <td></td>
                <td style="font-weight:bold">Totales</td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_venta,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_saldo,2); ?></td>
                <td style="font-weight:bold ; text-align:right"> <?php echo "$" . number_format($total_saldo_vencido,2); ?></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
            </tr>            
        </tbody>               
    </table>
</div>
