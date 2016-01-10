<?php 
    use yii\helpers\Html;
    use yii\widgets\ActiveForm;
    use yii\helpers\ArrayHelper;
    use yii\web\Controller;
    use miloschuman\highcharts\highcharts;
?>

<div class='row'>
	<div class='col-sm-12'>
		<div class="reportes-Tramites-form">
		    <form action="reportes-tramites">
		     <input type="date" name="filtro[fechaInicial]">
		     <input type="date" name="filtro[fechaFinal]">
		     <button class="btn btn-primary" type="submit">Buscar</button>
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
		            <th>En revision</th>
		           
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

<div class='row'>
	<div class='col-sm-12'>
		<div id='grafica' style="width:400px; height:400px"></div>
	</div>
</div>

<script>
$(function () {
    $('#grafica').highcharts({
        title: {
            text: '',
            x: -20 //center
        },
        subtitle: {
            text: '',
            x: -20
        },
        xAxis: {
            categories: ['En Proceso', 'Finalizado', 'Revision']
        },
        yAxis: {
            title: {
                text: ' '
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
            name: 'Cantidad',
            data: [<?php echo $enProceso; ?>, <?php echo $finalizado; ?>, <?php echo $revision; ?>]
        }]
    });
});
</script>