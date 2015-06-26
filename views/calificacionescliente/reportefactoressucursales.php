<div class="row">
	<div class="col-lg-12">
		



<?php $c = 0; ?>
<h3><?php echo "Reporte: " . $nombreReporte . "."  ?> </h3>

<button type="button" class="btn btn-primary pull-right" onclick="window.history.back();" >Atrás</button> 

<table class="table table-bordered table-striped tabla responsive" style="margin-top: 50px;">
	<thead>
		<tr>
			<th>#</th>
			<th>Sucursal</th>
			<th>Venta</th>
			<th>Saldo</th>
			<th>Recuperación</th>
			<th>Gastos venta</th>
			<th>Gastos administración</th>
			<th>Utilidad de la operación</th>
			<th>Valor del inventario</th>
			<th>Factor de riesgo</th>
			<th>%</th>
		</tr>
	</thead>
	<tbody>		
		<?php foreach($rs as $registro){
			$c++; ?>
		<tr>
			<td> <?php echo $registro["COD_PLAZA"]; ?></td>
			<td> <?php echo $registro["NOM_PLAZA"]; ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["ENTREGA"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["SALDO"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["RECUPERACION"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["GASTOS_VENTA"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["GASTOS_ADMINISTRACION"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["UTILIDAD_OPERACION"],2); ?></td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["VALOR_INVENTARIO_ACTUAL"],2); ?>%</td>
			<td style="text-align:right"> <?php echo "$" . number_format($registro["FACTOR_RIESGO_PESOS"],2); ?></td>
			<td style="text-align:right"> <?php echo $registro["FACTOR_RIESGO_PORCENTAJE"]; ?>%</td>
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>	
</div>
