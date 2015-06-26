<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Utilerias;

?>

<?php 
    //echo '<pre>' ; print_r($parametros) ; echo '</pre>' ;
	//echo '<pre>' ; print_r($rs) ; echo '</pre>' ;
    //exit;
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
			echo Html::a('Versión para Imprimir', ['ventas/mejoresproductos', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
		} 
		?>
	</div>	
</div>

<div class="row">
    <div class="col-lg-12">
        <section>
            <!-- <table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
            <table class="table table-bordered table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Cantidad</th>
                        <th>Utilidad</th>
                        <th>(%) Utilidad</th>
                        <th>(%) Participación</th>
                    </tr>
                </thead>
                

                <tbody>     
                    <?php 
                        $total_cantidad = 0;
                        $total_utilidad= 0;

                     foreach($rs as $registro){
                        $c++; 

                    ?> 
                    <tr>
                        <td></td> <!--Columna en blanco para el "+"  -->
                        <td> <?php echo $registro["Codigo"]; ?></td>
                        <td> <?= Html::a(substr($registro["Descripcion"],0,50), ['ventas/mejoresclientes', 'utilidad_max' => '101' , 'cod_grupo' => '', 'descri_heredado' => $registro["Descripcion"], "param" => serialize($parametros)],['target' => '_blank']) ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["CANTIDAD"],3); ?></td>
                        <td style="text-align:right"> <?php echo "$ " . number_format($registro["Utilidad"],2); ?></td>
                        <td style="text-align:right"> <?php echo number_format($registro["P_utilidad"],2); ?>%</td>
                        <td style="text-align:right"> <?php echo number_format($registro["participacion"],2); ?>%</td>
                    </tr>
                    <?php 

                        $total_cantidad = $total_cantidad + $registro["CANTIDAD"];
                        $total_utilidad= $total_utilidad + $registro["Utilidad"];

                        } ?>
                                       
                </tbody>

            </table>
            <table class="table table-bordered table-striped tabla2 display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">                
                <thead>
                    <tr>
                        <th></th>
                        <th></th>
                        <th>Totales:</th>
                        <th>Cantidad</th>
                        <th>Utilidad</th>
                        <th></th>
                    </tr>
                </thead>
                

                <tbody>     
                    <tr>
                        <td></td> <!--Columna en blanco para el "+"  -->
                        <td></td>
                        <td></td>
                        <td style="text-align:right;font-weight:bold;"> <?php echo number_format($total_cantidad,3); ?></td>
                        <td style="text-align:right;font-weight:bold;"> <?php echo "$ " . number_format($total_utilidad,2); ?></td>
                        <td></td>
                    </tr>
                </tbody>

            </table>
        </section>
    </div>
</div>
