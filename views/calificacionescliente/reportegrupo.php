<?php $c = 0; ?>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>

<h5><?php echo $rs[0]["DESCRI"]; unset($rs[0]); ?> </h5>
<h5><?php echo (!empty($datos["codigoZona"])) ? "Zona : " . $datos["codigoZona"] . " " . $nombreZona:''   ;   ?> </h5>
<h5><?php //echo "Desde: " . date("d-m-Y", strtotime($datos["fecha1"]))  ." hasta: " . date("d-m-Y", strtotime($datos["fecha2"])) ;   ?> </h5>
<p><?php echo "Desde: " . 
        date('d',strtotime($datos["fecha1"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($datos["fecha1"]))]) . '-' . date('y',strtotime($datos["fecha1"])) .
        " hasta: " . 
        date('d',strtotime($datos["fecha2"])) .'-' . (Yii::$app->params['meses'][date('n',strtotime($datos["fecha2"]))]) . '-' . date('y',strtotime($datos["fecha2"])) ;  
        ?> </p>

<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button> 

<table class="table table-bordered">
	<tbody>
		<?php foreach($rs as $registro){
			$c++; ?>
		<tr class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "info";}
					else if ($registro["COLOR"] == "ROJO") {echo "error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "sucess";} ?>">
			<td colspan="<?php echo ($c < 7) ? 4 : ''; ?>"> <?php echo $registro["DESCRI"]; ?></td>
			<?php if($c >=7) { ?>
			<td style="text-align:right;"class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "text-info";}
					else if ($registro["COLOR"] == "ROJO") {echo "text-error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "text-warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "text-sucess";} ?>"><?php echo $registro["IMPORTE"]; ?></td>
			<td style="text-align:right;"class="<?php
					if ($registro["COLOR"] == "AZUL") {echo "text-info";}
					else if ($registro["COLOR"] == "ROJO") {echo "text-error";}
					else if ($registro["COLOR"] == "AMARILLO") {echo "text-warning";}
					else if ($registro["COLOR"] == "VERDE") {echo "text-sucess";} ?>"><?php echo $registro["B"]; ?></td>
				<?php } ?>
			

		</tr>
		<?php } ?>
	</tbody>
</table>


<?php 
	//echo '<pre>';print_r($rs); echo "</pre>";
?>