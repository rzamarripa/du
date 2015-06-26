<?php $c = 0; ?>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>

<h5><?php echo $rs[0]["DESCRI"]; unset($rs[0]); ?> </h5>
<h5><?php //echo (count($datos["codigoZona"])>0) ? "Zona : " . $datos["codigoZona"] . " " . $nombreZona:''   ;   ?> </h5>
<h5><?php //echo "Desde: " . date("d-m-Y", strtotime($datos["fecha1"]))  ." hasta: " . date("d-m-Y", strtotime($datos["fecha2"])) ;   ?> </h5>

<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button> 

<table class="table table-bordered">
	<tbody>
		<?php foreach($rs as $registro){
			$c++; ?>
		<tr>
			<td colspan="<?php echo ($c < 7) ? 4 : ''; ?>"> <?php echo $registro["DESCRI"]; ?></td>
			<?php if($c >=7) { ?>
			<td style="text-align:right;"><?php echo $registro["IMPORTE"]; ?></td>
			<td style="text-align:right;"><?php echo $registro["B"]; ?></td>
				<?php } ?>
		</tr>
		<?php } ?>
	</tbody>
</table>


<?php 
	//echo '<pre>';print_r($rs); echo "</pre>";
?>