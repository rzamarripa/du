<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use miloschuman\highcharts\highcharts;
    use dosamigos\datepicker\DatePicker;
    //use kartik\widgets\DatePicker;
?>
<div class="row">
	<div class="col-sm-12">
		<h3>Reportes</h3>
	</div>
</div>



<div class='row'>
	<div class='col-sm-12'>
		<div class="reportes-form">
	    <form action="reportes" class="">
		    <div class="row">
			    <div class="col-sm-3">
				    <div class="form-group">
					    <label>Fecha Inicial</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaInicial]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>

			    </div>
			    <div class="col-sm-3">
			    	<div class="form-group">
					    <label>Fecha Final</label>
              <div class='input-group date'>
                <input type='text' class="form-control datepicker" name="filtro[fechaFinal]" />
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
              </div>
            </div>
			    </div>			    
			    <div class='col-sm-4' style='margin-top: 5px'>
						<?php  
							$tramitesArray = [];						
							foreach ($tramites as $tramite) {
								$tramitesArray[$tramite["id"]] =  $tramite["nombre"];
							}
							echo "<label>Trámite " . Html::dropDownList('filtro[tramite_id]', "hola", $tramitesArray,['class'=>'form-control']) . "</label>";						
						?>
			     <button class="btn btn-primary" style="margin-top: -6px" type="submit">Buscar</button>
					</div>
		    </div>
	  	</form>
		</div>
	</div>
</div>


<div class='row'>
	<div class='col-sm-12'>
	   <table id="datatable" class="table table-striped table-bordered">
	    <thead>
        <tr>
          <th>En proceso</th>
          <th>Finalizados</th>
          <th>En revisión</th>		           
        </tr>
	    </thead>
			<tbody>	     
			  <tr>   
	        <td><?=$enProceso?></td>
	        <td><?=$finalizado?></td>
	        <td><?=$revision?></td>
				</tr>	       
	    </tbody>
		</table>
	</div>
</div>

<div class='row well'>
	<div class="col-sm-12">
		<h3>Gráfica Estadística</h3>
	</div>
	<div class='col-sm-8 col-sm-offset-2'>
		<div id='grafica' style="width:800px; height:400px"></div>
	</div>
</div>
<hr>

<script>
$(function () {
    $('#grafica').highcharts({
        title: {
            text: 'Cantidad de Procesos por Estatus',
            x: -20
        },
        subtitle: {
            text: 'Desarrollo Urbano',
            x: -20
        },
        xAxis: {
            categories: ['En Proceso', 'Finalizado', 'Revisión']
        },
        yAxis: {
            title: {
                text: 'Cantidad de Trámites'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Trámites',
            data: [<?php echo $enProceso; ?>, <?php echo $finalizado; ?>, <?php echo $revision; ?>]
        }]
    });
});
</script>
