<?php 

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php 
    //echo '<pre>' ; print_r($parametros) ; echo '</pre>' ;
    //exit;
?>

<div class="row">
	<div class="col-lg-12">

		<?php $c = 0;$cantidad = 0;$venta = 0;$costo = 0;$utilidad = 0;$p_utilidad = 0;?>

        <h3>Grupo Passa</h3>
        <p><?php echo "Reporte: " . $nombreReporte; ?></p>

        <p>
            <?php 
                $descri_filtros_porcentaje = '' ;
                if (isset($parametros["filtrarporporcentajeutlidad"]) && isset($parametros["min"])){
                    switch ($parametros["min"]) {
                       case 'NO':
                           $descri_filtros_porcentaje = 'Porcentaje de utilidad mínimo : ' ;
                           break;

                       case 'SI':
                           $descri_filtros_porcentaje = 'Porcentaje de utilidad máximo : ' ;
                           break;

                       case 'E':
                           $descri_filtros_porcentaje = 'Exacto : ' ;
                           break;
                   }
                   switch ($parametros["filtrarValor"]) {
                       case 'CATEGORIA':
                           $descri_filtros_porcentaje = $descri_filtros_porcentaje . $parametros["categoria"] ;
                           break;                
                       case 'PORCENTAJE':
                           $descri_filtros_porcentaje = $descri_filtros_porcentaje . $parametros["porcentaje"] ;
                           break;
                   }
                }
/*
                echo (!empty($parametros["cod_cte"])) ? "Cliente: " . $parametros["cod_cte"] . " " . $parametros["nomCliente"] . " ; " : '' ;
                echo (!empty($parametros["cod_agricola"])) ? "Agricola: " . $parametros["cod_agricola"] . " " . $parametros["nomAgricola"] . " ; " : '' ;
                echo (!empty($parametros["cod_zona"])) ? "Zona: " . $parametros["cod_zona"] . " " . $parametros["nomZona"] . " ; " : '' ;
                echo (!empty($parametros["cod_grupo"])) ? "Grupo: " . $parametros["cod_grupo"] . " " . $parametros["nomGrupo"] . " ; " : '' ;
                echo (!empty($parametros["cod_grupo_prod_interes"])) ? "Grupo productos: " . $parametros["cod_grupo_prod_interes"] . " " . $parametros["nomGrupoProductos"] . " ; " : '' ;
                echo (!empty($parametros["descri"])) ? "Productos que empiecen con: " . $parametros["descri"] . " ; " : '' ;
                echo $descri_filtros_porcentaje ;*/
            ?>
        </p>

        <p><?php echo "Desde: " . 
        date('d',strtotime($parametros["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha1"]))]) . '-' . date('y',strtotime($parametros["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($parametros["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($parametros["fecha2"]))]) . '-' . date('y',strtotime($parametros["fecha2"])) ;  
        ?> </p>  

        <?php /*
		<?php
			$form = ActiveForm::begin(['id' => 'my-form', 'action'=>['ventas/toptenproductos'], 'options'=>['class'=>'smart-form']]);
			
			$hola["cod_cte"] = $parametros["cod_cte"];
			$hola["nom_cte"] = $parametros["nom_cte"];
			//echo "<pre>"; print_r($hola); echo "</pre>";
			
		?>

		<input type="hidden" value="<?php echo serialize($parametros); ?>" name="parametros">
		<button type="submit">Versión para imprimir</button>

		<?php ActiveForm::end(); ?> */?>
		<?php 
		
		//if("si"=="no"){ 
		if(!isset($parametros["verReporte"])){
			$parametros["verReporte"] = true;
			echo Html::a('Versión para Imprimir', ['ventas/toptenproductos', 'param' =>serialize($parametros)], ['class' => 'btn btn-primary']);
		} 
		?>
	</div>	
</div>


<div class="row">
    <div class="col-lg-12">
		<!--<table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">-->
		<table class="table table-bordered table-condensed table-striped tabla display nowrap responsive" cellspacing="0" width="100%" style="margin-top: 50px;">  
			<thead>
				<tr>
					<th></th>
					<th>#</th>
					<th>CATEGORIA</th>
					<th>DESCRIPCION</th>
					<th>CANTIDAD</th>
					<th>VENTA</th>
					<th>COSTO</th>
					<th>UTILIDAD</th>
					<th>P_UTILIDAD</th>
					<th>PARTICIPACION_VENTA</th>
					<th>ACUMULADO_VENTA</th>
					<th>PARTICIPACION_UTILIDAD</th>
					<th>ACUMULADO_UTILIDAD</th>
				</tr>
			</thead>
			<tbody>		
				<?php foreach($rs as $registro){
					$c++;
					$cantidad =$cantidad+$registro["CANTIDAD"];
					$venta =$venta+$registro["VENTA"];
					$costo =$costo+$registro["COSTO"];
					$utilidad =$utilidad+$registro["UTILIDAD"];
					if($venta>0){
						$p_utilidad=($utilidad/$venta)*100;
					}else{
						$p_utilidad=0;
					}

					?>
					<tr>
						<td></td>
						<td> <?php echo $registro["IDTRANS"]; ?></td>
						<td> <?php echo $registro["CATEGORIA"]; ?></td>

						<!--<td> <?php echo $registro["DESCRIPCION"]; ?></td>-->
						<td> <?= Html::a(substr($registro["DESCRIPCION"],0,50), ['ventas/toptenclientes', 'id' => $registro["DESCRIPCION"], "param" => serialize($parametros)],['target' => '_blank']) ?></td>
						
						<td style="text-align:right"> <?php echo number_format($registro["CANTIDAD"],2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($registro["VENTA"],2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($registro["COSTO"],2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD"],2); ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["P_UTILIDAD"],2) . "%" ; ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["PARTICIPACION_VENTA"],2) . "%" ; ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["ACUMULADO_VENTA"],2) . "%" ; ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["PARTICIPACION_UTILIDAD"],2) . "%" ; ?></td>
						<td style="text-align:right"> <?php echo number_format($registro["ACUMULADO_UTILIDAD"],2) . "%" ; ?></td>
					</tr>
				<?php } ?>
				<tfoot>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td>TOTALES :</td>
						<td style="text-align:right"> <?php echo number_format($cantidad,2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($venta,2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($costo,2); ?></td>
						<td style="text-align:right"> <?php echo "$" . number_format($utilidad,2); ?></td>
						<td style="text-align:right"> <?php echo number_format($p_utilidad,2) . "%" ; ?></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				  </tfoot>
			</tbody>
		</table>
	</div>	
</div>
