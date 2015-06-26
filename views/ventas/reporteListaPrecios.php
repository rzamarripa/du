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
        <p><?php echo (strlen($parametros["descri"]) > 0 ) ? "Artículos que empiecen con: " . $parametros["descri"] : "" ;   
        ?> </p>  

		<?php 
		
		//if("si"=="no"){ 
		if(!isset($parametros["verReporte"])){
			$parametros["verReporte"] = true;
			echo Html::a('Versión para Imprimir', ['ventas/listaprecios', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
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
                        <th>Precio Lista</th>
                        <th>%</th>
                        <th>Precio Mínimo</th>
                        <th>%</th>
                        <th>Precio Contado</th>
                        <th>Actualización</th>
                        <th>%IEPS</th>
                    </tr>
                </thead>
                

                <tbody>     
                    <?php foreach($rs as $registro){
                        $c++; 
                    ?> 
                    <tr>
                        <td></td> <!--Columna en blanco para el "+"  -->
                        <td> <?php echo $registro["COD_ART"]; ?></td>
                        <td> <?php echo $registro["DESCRI"]; ?></td>
                        <td style="text-align:right"> <?php echo "$ " . number_format($registro["PVTA_V1"],3); ?></td>
                        <td style="text-align:right"> <?php echo $registro["DESCUENTO4"]; ?>%</td>
                        <td style="text-align:right"> <?php echo "$ " . number_format($registro["PVTA_V5"],3); ?></td>
                        <td style="text-align:right"> <?php echo $registro["DESCUENTO_CONTADO"]; ?>%</td>
                        <td style="text-align:right"> <?php echo "$ " . number_format($registro["PVTA_CONTADO"],3); ?></td>
                        <td> <?php echo Utilerias::formatFechaFormatoCorto($registro["FECHA_ACTUALIZACION"]); ?></td>
                        <td style="text-align:right"> <?php echo $registro["IEPS_PORCENTAJE"]; ?></td>

                    </tr>
                    <?php } ?>
                                       
                </tbody>

            </table>
        </section>
    </div>
</div>
